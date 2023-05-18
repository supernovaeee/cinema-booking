<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\order_movies;
use App\Models\order_detail;
use App\Models\orders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class showTicketWeek extends Controller
{
    public function showTicketWeek(Request $request){
        $query = order_movies::select(
            'movies.movies_name',
            DB::raw('CONCAT("Week ", WEEK(orders.created_at)) as week'),
            DB::raw('DATE_FORMAT(MIN(orders.created_at), "%d-%m-%Y") as start_date'),
            DB::raw('DATE_FORMAT(MAX(orders.created_at), "%d-%m-%Y") as end_date'),
            DB::raw('COUNT(order_movies.id_order_movies) as total_qty'),
            DB::raw('SUM(orders.total_price) as total_price')
        )
            ->join('orders', 'order_movies.id_order', '=', 'orders.id_order')
            ->join('studio_movies', 'order_movies.id_studio_movies', '=', 'studio_movies.id_studio_movies')
            ->join('movies', 'studio_movies.id_movies', '=', 'movies.id_movies')
            ->where('orders.status', '=', 0);
    
        // Apply search filter
        $search = $request->input('search');
        if ($search) {
            $query->where('movies.movies_name', 'LIKE', '%' . $search . '%');
        }
    
        // Apply sorting
        $sort = $request->input('sort');
        $direction = $request->input('direction');
        if ($sort && $direction) {
            if ($sort === 'week') {
                $query->orderBy('week', $direction);
            } else {
                $query->orderBy($sort, $direction);
            }
        }
    
        $orders = $query->groupBy('movies.movies_name', 'week')->get();
    
        return view('owner.ticketWeek')->with('orders', $orders);
    }
}
