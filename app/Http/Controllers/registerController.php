<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    //USER
    public function registerAll(Request $r)
    {
        //Apabila sudah ada di database
        if (\App\Models\users::where("email", $r->email)->where('status', 0)->first()) {
            return redirect()->back()->with('error', 'email exists'); //kembali tanpa menyimpan apa apa di database
        }
        //jika belum ada lakukan penambahan data di database
        else {
            $temp = new \App\Models\users;
            $temp->role =$r->role;
            $temp->status =0;
            $temp->name = $r->name;
            $temp->username = $r->username;
            $temp->email = $r->email;
            $password = $r->password;
            $temp->password = bcrypt($password);
            $date = date_default_timezone_set('Asia/Singapore');
            $temp->created_at = date('Y-m-d H:i:s');
            $temp->updated_at =  date('Y-m-d H:i:s');
            $temp->save();
            return redirect()->back()->with('success', 'Registered');
        }
    }
    public function signup()
    {
        return view('web.SignUpTixID');
    }

}
