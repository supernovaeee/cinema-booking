<?php

namespace App\Http\Controllers;

use App\Models\order_movies;
use App\Models\order_detail;
use App\Models\orders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Owner extends Controller
{
    public function fnbDaily(Request $request){
        $query = order_detail::select(
            'fnb.fnb_name',
            DB::raw('DATE(orders.created_at) as date'),
            DB::raw('SUM(order_detail.qty) as total_qty'),
            DB::raw('SUM(orders.total_price) as total_price')
        )
            ->join('orders', 'order_detail.id_order', '=', 'orders.id_order')
            ->join('fnb', 'order_detail.id_fnb', '=', 'fnb.id_fnb')
            ->where('orders.status', '=', 0);
    
        // Apply search filter
        $search = $request->input('search');
        if ($search) {
            $query->where('fnb.fnb_name', 'LIKE', '%' . $search . '%');
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
    
        $orders = $query->groupBy('fnb.fnb_name', 'date')->get();
    
        return view('owner.fnbDaily')->with('orders', $orders);


    }

public function fnbHour(Request $request)
{
    $query = order_detail::select(
        'fnb.fnb_name',
        DB::raw('DATE_FORMAT(orders.created_at, "%H:00 - %H:59") as time_frame'),
        DB::raw('DATE(orders.created_at) as date'),
        DB::raw('SUM(order_detail.qty) as total_qty'),
        DB::raw('SUM(orders.total_price) as total_price')
    )
        ->join('orders', 'order_detail.id_order', '=', 'orders.id_order')
        ->join('fnb', 'order_detail.id_fnb', '=', 'fnb.id_fnb')
        ->where('orders.status', '=', 0);

    // Apply search filter
    $search = $request->input('search');
    if ($search) {
        $query->where('fnb.fnb_name', 'LIKE', '%' . $search . '%');
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

    $orders = $query->groupBy('fnb.fnb_name', 'time_frame', 'date')->get();

    return view('owner.fnbHour')->with('orders', $orders);
}

public function fnbWeek(Request $request)
{
    $query = order_detail::select(
        'fnb.fnb_name',
        DB::raw('CONCAT("Week ", WEEK(orders.created_at)) as week'),
        DB::raw('DATE_FORMAT(MIN(orders.created_at), "%d-%m-%Y") as start_date'),
        DB::raw('DATE_FORMAT(MAX(orders.created_at), "%d-%m-%Y") as end_date'),
        DB::raw('SUM(order_detail.qty) as total_qty'),
        DB::raw('SUM(orders.total_price) as total_price')
    )
        ->join('orders', 'order_detail.id_order', '=', 'orders.id_order')
        ->join('fnb', 'order_detail.id_fnb', '=', 'fnb.id_fnb')
        ->where('orders.status', '=', 0);

    // Apply search filter
    $search = $request->input('search');
    if ($search) {
        $query->where('fnb.fnb_name', 'LIKE', '%' . $search . '%');
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

    $orders = $query->groupBy('fnb.fnb_name', 'week')->get();

    return view('owner.fnbWeek')->with('orders', $orders);
}
public function fnbMonth(Request $request)
{
    $query = order_detail::select(
        'fnb.fnb_name',
        DB::raw('CONCAT("", MONTH(orders.created_at)) as month'),
        DB::raw('CONCAT("", YEAR(orders.created_at)) as year'),
        DB::raw('SUM(order_detail.qty) as total_qty'),
        DB::raw('SUM(orders.total_price) as total_price')
    )
        ->join('orders', 'order_detail.id_order', '=', 'orders.id_order')
        ->join('fnb', 'order_detail.id_fnb', '=', 'fnb.id_fnb')
        ->where('orders.status', '=', 0);

    // Apply search filter
    $search = $request->input('search');
    if ($search) {
        $query->where('fnb.fnb_name', 'LIKE', '%' . $search . '%');
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

    $orders = $query->groupBy('fnb.fnb_name', 'month', 'year')->get();

    return view('owner.fnbMonth')->with('orders', $orders);
}

public function ticketDaily(Request $request){
    $query = order_movies::select(
        'movies.movies_name',
        DB::raw('DATE(orders.created_at) as date'),
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
        if ($sort === 'date') {
            $query->orderBy('date', $direction);
        } else {
            $query->orderBy($sort, $direction);
        }
    }

    $orders = $query->groupBy('movies.movies_name', 'date')->get();

    return view('owner.ticketDaily')->with('orders', $orders);


}

public function ticketHour(Request $request)
{
    $query = order_movies::select(
        'movies.movies_name',
        DB::raw('DATE_FORMAT(orders.created_at, "%H:00 - %H:59") as time_frame'),
        DB::raw('DATE(orders.created_at) as date'),
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
        if ($sort === 'date') {
            $query->orderBy('date', $direction);
        } else {
            $query->orderBy($sort, $direction);
        }
    }

    $orders = $query->groupBy('movies.movies_name', 'time_frame', 'date')->get();

    return view('owner.ticketHour')->with('orders', $orders);
}

    public function ticketWeek(Request $request){
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
    public function ticketMonth(Request $request){
        $query = order_movies::select(
            'movies.movies_name',
            DB::raw('CONCAT("", MONTH(orders.created_at)) as month'),
            DB::raw('CONCAT("", YEAR(orders.created_at)) as year'),
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
            if ($sort === 'month') {
                $query->orderBy('month', $direction);
            } else {
                $query->orderBy($sort, $direction);
            }
        }
    
        $orders = $query->groupBy('movies.movies_name', 'month', 'year')->get();
    
        return view('owner.ticketMonth')->with('orders', $orders);
    }

    public function trends(){
        return view('owner.trends');
    }
}
