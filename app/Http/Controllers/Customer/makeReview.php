<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\fnb;
use App\Models\movies;
use App\Models\orders;
use App\Models\orders_detail;
use App\Models\review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class makeReview extends Controller
{
    public function makeReview(Request $r)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors(['Login First!']);
        } else {
            $review = new review();
            $review->id_user = Auth::user()->id;
            $review->review_desc = $r->review;
            $id_movies=movies::where('movies_name',$r->movies)->value('id_movies');
            $review->id_movies = $id_movies;
            $review->status = 0;
            $review->save();
            return redirect ()->back()->with('flash_message','Review Submitted!');
        }
    }
}
