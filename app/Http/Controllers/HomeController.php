<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Service;
use App\Models\Project;
use App\Models\Transaction;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\BulkSMSTransaction;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

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

        return response()->view('producer.index', $data);
    }

    public function contactus()
    {

        $data['user'] = $user = Auth::user();

        $data['active'] = 'dashboard';
        $data['contacts'] = Contact::latest()->get();


        return response()->view('dashboard.contactus', $data);
    }

 
   
}
