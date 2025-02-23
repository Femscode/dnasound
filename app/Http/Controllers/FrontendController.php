<?php

namespace App\Http\Controllers;

use App\Models\Beat;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Project;
use App\Models\ProjectAdditionalImage;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   
    public function index() {
        $data['trending']  = Beat::latest()->take(20)->get();
        $data['mostrated']  = Beat::inRandomOrder()->take(20)->get();
        $data['popular']  = Beat::inRandomOrder()->take(20)->get();
        $data['quickpick1']  = Beat::inRandomOrder()->take(5)->get();
        $data['quickpick2']  = Beat::inRandomOrder()->take(5)->get();
        return view('frontend.index',$data);
    }
    public function mostrated() {
        $data['mostrated']  = Beat::latest()->paginate(20);
        return view('frontend.mostrated',$data);
    }
    public function trending() {
        $data['trending']  = Beat::latest()->paginate(20);
        return view('frontend.trending',$data);
    }
    public function popular() {
        $data['popular']  = Beat::latest()->paginate(20);
        return view('frontend.popular',$data);
    }
    public function about() {
        return view('frontend.about');
    }
    public function faq() {
        return view('frontend.faq');
    }
    public function products() {
        $data['projects'] = Project::where('status',1)->latest()->get();
        return view('frontend.project', $data);
    }
    public function blogs() {
        $data['blogs'] = Blog::where('status',1)->latest()->get();
        return view('frontend.blog', $data);
    }
    public function services() {
        $data['services'] = Service::where('status',1)->latest()->get();
        return view('frontend.service', $data);
    }
    public function saveContactUs(Request $request) {
      
        Contact::create($request->all());
        return redirect()->back()->with('message', 'Message submitted successfully!');
      
        
    }
    
    public function projectdetails($id) {
        $data['project'] = Project::find($id);
        $data['projectimages']  = ProjectAdditionalImage::where('project_id',$id)->get();
        return view('frontend.project-details', $data);
    }
}
