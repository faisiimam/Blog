<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function list(Request $request)
    {
        return view('backend.admin.contact.list');
    }

    public function add()
    {
        return view('backend.admin.contact.add');
    }
    public function edit()
    {
        return view('backend.admin.contact.edit');
    }
    public function delete()
    {
        return view('backend.admin.contact.delete');
    }
    public function view()
    {
        return view('backend.admin.contact.view');
    }
    public function trashed()
    {
        return view('backend.admin.contact.trashed');
    }
}
