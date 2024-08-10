<?php

namespace App\Http\Controllers;

use App\Models\Beat;
use App\Models\BulkSMSTransaction;
use App\Models\Contact;
use App\Models\Notification;
use App\Models\Project;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function logout()
    {
        Auth::logout();
        // return Redirect::route('login');
        Session::flush();

        return Redirect::away('login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {

        return redirect('/dashboard');
    }

    public function dashboard()
    {

        $data['user'] = $user = Auth::user();

        $data['active'] = 'dashboard';
        $data['beats']  = Beat::where('user_id', $user->uuid)->latest()->get();
        $data['trending']  = Beat::latest()->get();
        $data['new'] = Beat::latest()->first();
        $data['producers'] = User::latest()->get();
        
        $storage = $user->storage;

        $totalSize = $user->used_storage;

        // Convert total size to GB and calculate remaining storage in GB
        $maxStorage = $user->storage * 1024 * 1024 * 1024; // User's max storage in bytes
        $remainingStorageBytes = $maxStorage - $totalSize;
    
        $data['remainingStorageGB'] = number_format($remainingStorageBytes / (1024 * 1024 * 1024), 2);
        $data['maxStorage'] = number_format($totalSize / (1024 * 1024 * 1024), 2);
    

        return response()->view('producer.index', $data);
    }

    public function contactus()
    {

        $data['user'] = $user = Auth::user();

        $data['active'] = 'dashboard';
        $data['contacts'] = Contact::latest()->get();


        return response()->view('dashboard.contactus', $data);
    }

    public function updateProfile(Request $request) {
        $data = $request->all();
       if($request->has('logo') && $request->logo !== null) {
        $image = $request->logo;
        $imageName = $image->hashName();
        $image->move(public_path('producerImage'),$imageName);
        $data['logo'] = $imageName;
       }

       $user = Auth::user();
       $user->update($data);
       return redirect()->back()->with('message', "Profile Updated Successfully!");
       
    }

    public function profile() {
        $data['user'] = Auth::user();
        
        return view('producer.profile',$data);
    }
}
