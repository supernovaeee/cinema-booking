<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\fnb;
use Illuminate\Http\Request;

class deleteFnb extends Controller
{
    public function deleteFood(string $id)
    {
        $user = fnb::find($id);
        $user->status =1;
        $user->save();
        return redirect ('showFnB')->with('flash_message','Deleted!');
    }
}
