<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;

class showUserController extends Controller
{
    public function read(){
        $users=users::all()->where('status', '<', 2);;
        return view('sysAdmin.read')->with('users',$users);
    }
}
