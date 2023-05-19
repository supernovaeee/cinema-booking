<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;

class deleteUserController extends Controller
{
    public function destroy(string $id)
    {
        $user = users::find($id);
        $user->status =2;
        $user->save();
        return redirect ('admin-dashboard')->with('flash_message','User Deleted!');
    }
}
