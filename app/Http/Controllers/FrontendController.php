<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function singlepage(){
        return view('frontend.singlepost');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function singleblog($id){
        dd($id);
        return view('frontend.general');
    }
}
