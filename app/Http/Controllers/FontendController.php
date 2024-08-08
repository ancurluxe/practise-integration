<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FontendController extends Controller
{
    //  public function details($details)
    // {
    //     // Find the service by its slug
    //     $service = Services::where('slug', $details)->firstOrFail();

    //     // Pass the service to the details view
    //     return view('frontend.services.details', compact('service'));
    // }
    //
    public function home(){
        return view("frontend.home.index");
    }
    public function about(){
        return view("frontend.about.index");
    }
    public function blogs(){
        return view("frontend.blogs.index");
    }
    public function services(){
        return view("frontend.services.index");
    }
    
    public function contact(){
        return view("frontend.contact.index");
    }
    public function details(){
     return view('frontend.services.details');
    }
     
    public function view(){
     return view('frontend.blogs.view');
    }
     
}