<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;

class updateUserController extends Controller
{
    public function update(Request $request, string $id)
    {
        $input = users::findOrFail($id);
        $input->name = $request->input('name');
        $input->email = $request->input('email');
        $input->username = $request->input('username');
        $input->password = $request->input('password');
        $input->role = $request->input('role');
        $input->status = $request->input('status');
        $input->save();
        return redirect ('admin-dashboard')->with('flash_message','User Updated!');
    }
    public function updatePage($id){
        $users = users::findOrFail($id);
        return view('sysAdmin.update', ['users' => $users]);
    }
    public function edit(string $id)
    {
        $users = users::find($id);
        return view('sysAdmin.update')->with('users', $users);
    }
}
