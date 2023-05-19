<?php


namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\order_movies;
use App\Models\orders_detail;
use App\Models\orders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class showFnbHour extends Controller
{
    public function showFnbHour(Request $request)
    {
        $query = orders_detail::select(
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
}
