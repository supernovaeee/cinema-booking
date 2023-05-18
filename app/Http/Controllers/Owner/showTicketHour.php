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

class showTicketHour extends Controller
{
    public function showTicketHour(Request $request)
    {
        $query = order_movies::select(
            'movies.movies_name',
            DB::raw('DATE_FORMAT(orders.created_at, "%H:00 - %H:59") as time_frame'),
            DB::raw('DATE(orders.created_at) as date'),
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
            if ($sort === 'date') {
                $query->orderBy('date', $direction);
            } else {
                $query->orderBy($sort, $direction);
            }
        }
    
        $orders = $query->groupBy('movies.movies_name', 'time_frame', 'date')->get();
    
        return view('owner.ticketHour')->with('orders', $orders);
    }
}
