<?php

namespace App\Http\Controllers\Owner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\orders;
use App\Models\order_movies;
use App\Models\orders_detail;
use League\Csv\Writer;
use Carbon\Carbon;
use SplTempFileObject;

class downloadReportDaily extends Controller
{
    public function downloadReportDaily()
    {

        // Retrieve the data for the hourly sales report using your modified query logic

        $query = orders::select(
            'fnb.fnb_name',
            DB::raw('DATE(orders.created_at) as date'),
            DB::raw('SUM(order_detail.qty) as fnb_qty'),
            DB::raw('SUM(orders.total_price) as fnb_rev')
        )
            ->join('order_detail', 'orders.id_order', '=', 'order_detail.id_order')
            ->join('fnb', 'order_detail.id_fnb', '=', 'fnb.id_fnb')
            ->where('orders.status', '=', 0)
            ->orderBy('date', 'desc'); // Sort by the 'date' column in descending order
        $orders = $query->groupBy('fnb.fnb_name', 'date')->get();

        $query2 = order_movies::select(
            'movies.movies_name',
            DB::raw('DATE(orders.created_at) as date'),
            DB::raw('SUM(order_movies.qty) as movie_qty'),
            DB::raw('SUM(orders.total_price) as movie_rev')
        )
            ->join('orders', 'order_movies.id_order', '=', 'orders.id_order')
            ->join('studio_movies', 'order_movies.id_studio_movies', '=', 'studio_movies.id_studio_movies')
            ->join('movies', 'studio_movies.id_movies', '=', 'movies.id_movies')
            ->where('orders.status', '=', 0)
            ->orderBy('date', 'desc'); // Sort by the 'date' column in descending order
        $orders2 = $query2->groupBy('movies.movies_name', 'date')->get();
        $mergedOrders = $orders->concat($orders2);


        // Create a new CSV writer instance
        $csv = Writer::createFromFileObject(new SplTempFileObject());

        // Add the CSV header row
        $csv->insertOne(['Date', 'Food/Beverage', 'Food/Beverage Quantity', 'Food/Beverage Revenues', 'Movie Name', 'Movie Quantity', 'Movie Revenues']);

        // Add the data rows to the CSV
        foreach ($mergedOrders as $order) {
            $csv->insertOne([
                $order->date,
                $order->fnb_rev,
                $order->fnb_name,
                $order->fnb_qty,
                $order->movies_name,
                $order->movie_qty,
                $order->movie_rev
            ]);
        }

        // Set the headers for file download
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="sales_report_daily.csv"',
        ];

        // Generate the CSV file and force download
        return response($csv->getContent(), 200, $headers);
    }
}
