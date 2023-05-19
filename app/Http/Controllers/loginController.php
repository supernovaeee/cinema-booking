<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function dologin(Request $r)
    {

        $systemAdmin = array(
            'username' => $r->username,
            'password' => $r->password,
            'role' => 1,
            'status' => 0
        );
        $customer = array(
            'username' => $r->username,
            'password' => $r->password,
            'role' => 2,
            'status' => 0
        );

        $owner = array(
            'username' => $r->username,
            'password' => $r->password,
            'role' => 3,
            'status' => 0
        );

        $manager = array(
            'username' => $r->username,
            'password' => $r->password,
            'role' => 4,
            'status' => 0
        );



        if (Auth::attempt($systemAdmin)) {
            return redirect()->route('admin-dashboard');
        }
        else if(Auth::attempt($customer)){
            return redirect()->route('index');
        }
        else if(Auth::attempt($owner)){
            return redirect()->route('showTicketHour');
        }
        else if(Auth::attempt($manager)){
            return redirect()->route('showMovies');
        }
        else {
            return redirect()->back()->withErrors(['Invalid username/password']);
        }
    }
    public function login()
    {
        return view('web.Login');
    }
}
