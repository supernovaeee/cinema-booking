<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;

class delPageUserController extends Controller
{
    public function deleted(){
        $users=users::all()->where('status', '=', 2);
        return view('sysAdmin.deleted')->with('users',$users);
    }
}