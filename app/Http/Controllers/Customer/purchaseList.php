<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class purchaseList extends Controller
{
    public function myTicket()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors(['Login First!']);
        } else {
            $movies = orders::leftjoin('order_movies', 'orders.id_order', 'order_movies.id_order')
                ->join('studio_movies', 'studio_movies.id_studio_movies', '=', 'order_movies.id_studio_movies')
                ->join('movies', 'movies.id_movies', '=', 'studio_movies.id_movies')
                ->join('branch_studio', 'branch_studio.id_branch_studio', '=', 'studio_movies.id_branch_studio')
                ->join('branch', 'branch.id_branch', '=', 'branch_studio.id_branch')
                ->join('studio', 'studio.id_studio', '=', 'branch_studio.id_studio')->get();
            $food = orders::join('order_detail', 'orders.id_order', '=', 'order_detail.id_order')
                ->join('fnb', 'fnb.id_fnb', '=', 'order_detail.id_fnb')->get();
            return view('web.MyTicketTransactionList', ['movies' => $movies, 'food' => $food]);
        }
    }
}