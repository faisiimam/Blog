<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list(Request $request)
    {
        // dd($request);
        return view('backend.admin.blogs.list');
    }

    public function add()
    {
        return view('backend.admin.blogs.add');
    }
    public function edit()
    {
        return view('backend.admin.blogs.edit');
    }
    
    public function view()
    {
        // for view you may create modal , and return it as a json formate
        return view('backend.admin.blog.view');
    }

    public function trashed()
    {
        return view('backend.admin.blog.trashed');
    }

    public function delete()
    {
        return view('backend.admin.blog.delete');
    }
    
}
