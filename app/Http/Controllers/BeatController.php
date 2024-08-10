<?php

namespace App\Http\Controllers;

use App\Models\Beat;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BeatController extends Controller
{
    public function create_beat()
    {
        $data['user'] = $user = Auth::user();
        $data['folders'] = Folder::where('user_id', $user->uuid)->get();
        return view('producer.create-beat', $data);
    }

    public function save_beat(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|max:51200', // 50MB max file size, adjust as necessary
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:10240', // 10MB max image size
        ]);
    
        $user = Auth::user();
        $file = $request->file('file');
        $fileSize = $file->getSize();
    
        // 5GB in bytes
        $maxStorage = $user->storage * 1024 * 1024 * 1024;
    
        // Check if the user has enough storage space
        if (($user->used_storage + $fileSize) > $maxStorage) {
            return redirect()->back()->with('error', "Not enough storage, upgrade plan!");
        }
    
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
    
            $beat = Beat::create($data);
    
            // Update the user's used storage
            $user->increment('used_storage', $fileSize);
        });
    
        return redirect()->back()->with('message', 'Beat Created Successfully!');
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
       
        $data['folders'] = Folder::where('user_id', $user->uuid)->where('folder_id',0)->get();
        $data['beats'] = Beat::where('user_id', $user->uuid)->where('folder_id',0)->get();
        return view('producer.storage', $data);
    }
    public function storageSlug($slug)
    {
        $data['current_folder'] =$folder =  Folder::where('uuid',$slug)->first();
        $data['previous_folder'] = Folder::where('id',$folder->folder_id)->first();

        $data['user'] = $user = Auth::user();
        $data['folders'] = Folder::where('user_id', $user->uuid)->where('folder_id',$folder->id)->get();
        $data['beats'] = Beat::where('user_id', $user->uuid)->where('folder_id',$folder->id)->get();
        return view('producer.storage_slug', $data);
    }

    public function createFolder(Request $request)
    {

        $this->validate($request, [
            'name' => 'required'
        ]);
        if ($request->folder_id !== null) {
            $checkFolder = Folder::where('name', $request->name)->where('folder_id', $request->folder_id)->where('user_id',Auth::user()->uuid)->first();
       
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
        $checkFolder = Folder::where('name', $request->name)->where('folder_id', 0)->where('user_id',Auth::user()->uuid)->first();
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
}
