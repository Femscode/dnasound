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
        $data['trending']  = Beat::latest()->get();
        return view('frontend.index',$data);
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
