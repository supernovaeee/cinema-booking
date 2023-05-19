<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;

class restoreUserController extends Controller
{
    public function restore(string $id)
    {
        $user = users::find($id);
        $user->status =1;
        $user->save();
        return redirect ('admin-deleted')->with('flash_message','User Restored!');
    }
}
