<?php

namespace App\Http\Controllers;

use App\Models\Beat;
use App\Models\Comment;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BeatController extends Controller
{
    public function myBeat()
    {
        $data['user'] = $user = Auth::user();
        $data['beats']  = Beat::where('user_id', $user->uuid)->latest()->get();
        return view('producer.mybeats', $data);
      
    }
    public function trending()
    {
        $data['user'] = $user = Auth::user();
        $data['trending']  = Beat::latest()->get();
        if ($user->user_type == 'producer') {
            return response()->view('producer.trending_beat', $data);
        } else {
            return response()->view('dashboard.trending_beat', $data);
        }
      
    }
    public function create_beat()
    {
        $data['user'] = $user = Auth::user();
        $data['folders'] = Folder::where('user_id', $user->uuid)->get();

        $storage = $user->storage;
        $totalSize = $user->used_storage;

        // Convert total size to GB and calculate remaining storage in GB
        $maxStorage = $user->storage * 1024 * 1024 * 1024; // User's max storage in bytes
        $remainingStorageBytes = $maxStorage - $totalSize;

        $data['remainingStorageGB'] = number_format($remainingStorageBytes / (1024 * 1024 * 1024), 2);
        $data['maxStorage'] = number_format($totalSize / (1024 * 1024 * 1024), 2);
        if ($user->user_type == 'producer') {
            return response()->view('producer.create-beat', $data);
        } else {
            return response()->view('dashboard.index', $data);
        }
       
    }

    public function edit_beat($id)
    {
        $data['user'] = $user = Auth::user();
        $data['beat'] = Beat::where('uuid', $id)->firstOrFail();
        $data['folders'] = Folder::where('user_id', $user->uuid)->get();
        return view('producer.edit_beat', $data);
    }

    public function save_beat(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|max:51200', // 50MB max file size, adjust as necessary
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:10240', // 10MB max image size
        ]);
        // dd($request->all());

        $user = Auth::user();
        $file = $request->file('file');
        $fileSize = $file->getSize();

        // 5GB in bytes
        $maxStorage = $user->storage * 1024 * 1024;

        // Check if the user has enough storage space
        // if (($user->used_storage + $fileSize) > $maxStorage) {
        //     return redirect()->back()->with('error', "Not enough storage, upgrade plan!");
        // }
        // dd($request->all());

        DB::transaction(function () use ($request, $user, $fileSize) {
            $data = $request->except(['file', 'image']);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = $image->hashName();
                $image->move(public_path('beatImages'), $imageName);
                $data['image'] = $imageName;
            }

            $file = $request->file('file');
            $filename = $file->hashName();
            $file->move(public_path('beatFiles'), $filename);

            $data['user_id'] = $user->uuid;
            $data['file'] = $filename;
            $data['uuid'] = Str::uuid();
            $data['tags'] = array_map(fn($tag) => str_replace('"', '', $tag), explode(',', $request->input('tags')));
            $data['instruments'] = array_map(fn($tag) => str_replace('"', '', $tag), explode(',', $request->input('instruments')));

            // $data['tags'] = explode(',', $request->input('tags'));
            // $data['instruments'] = explode(',', $request->input('instruments'));

            $beat = Beat::create($data);

            // Update the user's used storage
            $user->increment('used_storage', $fileSize);
        });

        return redirect()->back()->with('message', 'Beat Uploaded Successfully!');
    }
    public function update_beat(Request $request)
    {
        $beat = Beat::where('uuid', $request->id)->firstOrFail();
        $user = Auth::user();
    
        DB::transaction(function () use ($request, $user, $beat) {
            $data = $request->except(['file', 'image']);
    
            // Handle image replacement
            if ($request->hasFile('image')) {
                // Check if an image already exists
                if ($beat->image && file_exists(public_path('beatImages/' . $beat->image))) {
                    $oldImageSize = filesize(public_path('beatImages/' . $beat->image));
                    unlink(public_path('beatImages/' . $beat->image));
                    $user->decrement('used_storage', $oldImageSize);
                }
    
                $image = $request->file('image');
                $imageName = $image->hashName();
                $image->move(public_path('beatImages'), $imageName);
                $beat->image = $imageName;
            }
    
            // Handle file replacement
            if ($request->hasFile('file')) {
                // Check if a file already exists
                if ($beat->file && file_exists(public_path('beatFiles/' . $beat->file))) {
                    $oldFileSize = filesize(public_path('beatFiles/' . $beat->file));
                    unlink(public_path('beatFiles/' . $beat->file));
                    $user->decrement('used_storage', $oldFileSize);
                }
    
                $file = $request->file('file');
                $filename = $file->hashName();
                $fileSize = $file->getSize();
                $file->move(public_path('beatFiles'), $filename);
                $beat->file = $filename;
    
                // Update the user's used storage
                $user->increment('used_storage', $fileSize);
            }
    
            // Update tags and instruments
            if($request->tags) {
                $beat->tags = array_map(fn($tag) => str_replace('"', '', $tag), explode(',', $request->input('tags')));

            }
            if ($request->instruments) {
                $beat->instruments = array_map(fn($tag) => str_replace('"', '', $tag), explode(',', $request->input('instruments')));

            }
            $beat->title = $request->title;
            $beat->price = $request->price;
            $beat->folder_id = $request->folder_id;
            $beat->genre = $request->genre;
            $beat->visibility = $request->visibility;
            $beat->description = $request->description;
    
            $beat->save();
        });
    
        return redirect()->back()->with('message', 'Beat Updated Successfully!');
    }

    

    public function delete_beat($id)
    {
        $beat = Beat::where('uuid', $id)->first();
        $beat->delete();
        return redirect()->back()->with('message', 'Beat Deleted Successfully!');
    }

    public function storage()
    {
        $data['user'] = $user = Auth::user();

        $data['folders'] = Folder::where('user_id', $user->uuid)->where('folder_id', 0)->get();
        $data['beats'] = Beat::where('user_id', $user->uuid)->where('folder_id', 0)->get();
        return view('producer.storage', $data);
    }
    public function storageSlug($slug)
    {
        $data['current_folder'] = $folder =  Folder::where('uuid', $slug)->first();
        $data['previous_folder'] = Folder::where('id', $folder->folder_id)->first();

        $data['user'] = $user = Auth::user();
        $data['folders'] = Folder::where('user_id', $user->uuid)->where('folder_id', $folder->id)->get();
        $data['beats'] = Beat::where('user_id', $user->uuid)->where('folder_id', $folder->id)->get();
        return view('producer.storage_slug', $data);
    }

    public function createFolder(Request $request)
    {

        $this->validate($request, [
            'name' => 'required'
        ]);
        if ($request->folder_id !== null) {
            $checkFolder = Folder::where('name', $request->name)->where('folder_id', $request->folder_id)->where('user_id', Auth::user()->uuid)->first();

            if (empty($checkFolder)) {
                Folder::create([
                    'name' => $request->name,
                    'folder_id' => $request->folder_id,
                    'uuid' => Str::uuid(),
                    'user_id' => Auth::user()->uuid
                ]);
                return redirect()->back()->with('message', "Folder Created Successfully!");
            } else {
                return redirect()->back()->with('error', "Folder Already Existed!");
            }
        }
        $checkFolder = Folder::where('name', $request->name)->where('folder_id', 0)->where('user_id', Auth::user()->uuid)->first();
        if (empty($checkFolder)) {
            Folder::create([
                'name' => $request->name,
                'folder_id' => 0,
                'uuid' => Str::uuid(),
                'user_id' => Auth::user()->uuid
            ]);
            return redirect()->back()->with('message', "Folder Created Successfully!");
        } else {
            return redirect()->back()->with('error', "Folder Already Existed!");
        }
    }
    public function beatDetails($slug)
    {
        $data['beat'] = $beat =Beat::where('uuid', $slug)->firstOrFail();
        $data['comments'] = Comment::where('beat_id',$beat->id)->get();
        $data['user'] = Auth::user();
        return view('producer.beat-details', $data);
    }

    public function addComment(Request $request) {
        $this->validate($request, [
            'comment' => 'required',
            'beat_id' => 'required'
        ]);
        $comment = Comment::create([
            'comment' => $request->comment,
            'user_id' => Auth::user()->id,
            'beat_id' => $request->beat_id,
            'comment_id' => $request->comment_id
        ]);

        return redirect()->back()->with('message','Comment added successfully!');
    }
}
