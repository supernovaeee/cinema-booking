<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\fnb;
use App\Models\movies;
use Illuminate\Http\Request;

class viewMovies extends Controller
{
    public function home()
    {
        $movies = movies::where('screening_status',1)->get();
        $soon = movies::where('screening_status',0)->get();
        $food = fnb::all();
        return view('web.home',['movies'=>$movies,'soon'=>$soon,'food'=>$food]);
    }
}