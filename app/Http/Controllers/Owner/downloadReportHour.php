<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use League\Csv\Writer;
use Illuminate\Http\Response;
use App\Models\orders;
use App\Models\order_movies;
use App\Models\order_detail;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use SplTempFileObject;

class downloadReportHour extends Controller
{
    public function downloadReportHour()
    {

        // Retrieve the data for the hourly sales report using your modified query logic

        $query = orders::select(
            'fnb.fnb_name',
            DB::raw('DATE_FORMAT(orders.created_at, "%H:00 - %H:59") as time_frame'),
            DB::raw('DATE(orders.created_at) as date'),
            DB::raw('SUM(order_detail.qty) as fnb_qty'),
            DB::raw('SUM(orders.total_price) as fnb_rev')
        )
            ->join('order_detail', 'orders.id_order', '=', 'order_detail.id_order')
            ->join('fnb', 'order_detail.id_fnb', '=', 'fnb.id_fnb')
            ->where('orders.status', '=', 0);
        $orders = $query->groupBy('fnb.fnb_name', 'time_frame', 'date')->get();

        $query2 = order_movies::select(
            'movies.movies_name',
            DB::raw('DATE_FORMAT(orders.created_at, "%H:00 - %H:59") as time_frame'),
            DB::raw('DATE(orders.created_at) as date'),
            DB::raw('SUM(order_movies.qty) as movie_qty'),
            DB::raw('SUM(orders.total_price) as movie_rev')
        )
            ->join('orders', 'order_movies.id_order', '=', 'orders.id_order')
            ->join('studio_movies', 'order_movies.id_studio_movies', '=', 'studio_movies.id_studio_movies')
            ->join('movies', 'studio_movies.id_movies', '=', 'movies.id_movies')
            ->where('orders.status', '=', 0);
        $orders2 = $query2->groupBy('movies.movies_name', 'time_frame', 'date')->get();

        // Create a new CSV writer instance
        $csv = Writer::createFromFileObject(new SplTempFileObject());

        // Add the CSV header row
        // $csv->insertOne(['Time Frame', 'Date', 'Food/Beverage', 'Food/Beverage Quantity', 'Food/Beverage Revenues', 'Movie Name', 'Movie Quantity', 'Movie Revenues']);
        $csv->insertOne(['Date', 'Hour', 'Revenues', 'Food/Beverage', 'Qty']);

        // Add the data rows to the CSV
        foreach ($orders as $order) {
            $csv->insertOne([
                $order->date,
                $order->time_frame,
                $order->fnb_rev,
                $order->fnb_name,
                $order->fnb_qty
                // $order->movies_name,
                // $order->movie_qty,
                // $order->movie_rev
            ]);
        }
        // Set the headers for file download
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="sales_report.csv"',
        ];

        // Generate the CSV file and force download
        return response($csv->getContent(), 200, $headers);
    }
}
