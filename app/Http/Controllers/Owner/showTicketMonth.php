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

class showTicketMonth extends Controller
{
    public function showTicketMonth(Request $request){
        $query = order_movies::select(
            'movies.movies_name',
            DB::raw('CONCAT("", MONTH(orders.created_at)) as month'),
            DB::raw('CONCAT("", YEAR(orders.created_at)) as year'),
            DB::raw('SUM(order_movies.qty) as total_qty'),
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
            if ($sort === 'month') {
                $query->orderBy('month', $direction);
            } else {
                $query->orderBy($sort, $direction);
            }
        }
    
        $orders = $query->groupBy('movies.movies_name', 'month', 'year')->get();
    
        return view('owner.ticketMonth')->with('orders', $orders);
    }
}
