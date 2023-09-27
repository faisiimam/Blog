<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        $data['user'] = User::select('id','name','email','image','address','active')->get();
        return json_encode($data['user']);
        return view('backend.admin.users.show',$data);
    }

    public function add(Request $request)
    {
        return view('backend.admin.users.create');
    }
    public function store(Request $request)
    {
        // dd($request);
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->created_at = Carbon::now();
        if ($users->save()) {
            return view('backend.admin.users.show');
        }
        return view('backend.admin.users.create');
    }
    public function edit($id)
    {
        // $user = User::find($id);
        $user = User::where('id',$id)->select('id','name','email','image','address','active')->first();
        dd($user->name);
        return view('backend.admin.users.edit',$user);
    }

    public function view()
    {
        // for view you may create modal , and return it as a json formate
        return view('backend.admin.users.view');
    }

    public function trashed()
    {
        return view('backend.admin.users.trashed');
    }

    public function delete()
    {
        return view('backend.admin.users.delete');
    }
}
