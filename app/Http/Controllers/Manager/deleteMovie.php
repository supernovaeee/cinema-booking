<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\movies;
use Illuminate\Http\Request;

class deleteMovie extends Controller
{
    public function deleteMovies(string $id)
    {
        $user = movies::find($id);
        $user->screening_status =2;
        $user->save();
        return redirect ('showMovies')->with('flash_message','Deleted!');
    }
}
