<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\fnb;
use App\Models\movies;
use App\Models\review;
use Illuminate\Http\Request;

class showReview extends Controller
{
    public function showReview()
    {
        $review = review::join('users','users.id','=','review.id_user')
                        ->join('movies','movies.id_movies','=','review.id_movies')->get();
        $movies= movies::all();
        return view('web.review',['review'=>$review,'movies'=>$movies]);
    }
}