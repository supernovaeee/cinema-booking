<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\orders_detail;
use Illuminate\Http\Request;

use App\Models\order_movies;
use App\Models\orders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class showFnbWeek extends Controller
{
    public function showFnbWeek(Request $request)
    {
        $query = orders_detail::select(
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
}
