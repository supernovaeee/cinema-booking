<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\movies;
use Illuminate\Http\Request;

class showMovie extends Controller
{
    public function showMovies()
    {
        $movies=movies::all();
        return view('manager.movies',['movies'=> $movies]);
    }
}
