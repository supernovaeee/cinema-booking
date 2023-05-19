<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;

class createUserController extends Controller
{
    public function createPage(){
        return view('sysAdmin.create');
    }
    public function store(Request $request)
    {
        $users = new users();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->username = $request->username;
        $password = $request->password;
        $users->password = bcrypt($password);
        $users->role = $request->role;
        $users->status = $request->status;
        $users->save();
        return redirect ('admin-dashboard')->with('flash_message','User Added!');
    }
}
