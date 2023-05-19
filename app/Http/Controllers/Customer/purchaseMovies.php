<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\branch;
use App\Models\branch_studio;
use App\Models\movies;
use App\Models\order_movies;
use App\Models\orders;
use App\Models\studio_movies;
use App\Models\tickets;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;


class purchaseMovies extends Controller
{
    public function schedule($id)
    {
        $dt = Carbon::now();
        $date= $dt->toDateString();
        $branch=branch::all();
        $branch_studio = branch_studio::leftJoin('studio','studio.id_studio','branch_studio.id_studio')->get();
        //->leftJoin('studio_movies','branch_studio.id_branch_studio','studio_movies.id_branch_studio')->get();
        $studio_movies = studio_movies::whereDate('time',$date)->where('id_movies',$id)->get();
        $time = studio_movies::where('id_movies',$id)->get();
        $id_movies=intval($id);
        $movies = movies::where('id_movies',$id_movies)->get();
        return view('web.ChoosingSchedule',['branch'=>$branch, 'branch_studio'=>$branch_studio,'studio_movies'=>$studio_movies,'movies'=>$movies,'time'=>$time]);
    }

    public function chooseSeats(Request $r)
    {

        if(!Auth::check()){
            return redirect()->route('login')->withErrors(['Login First!']);
        }
        else if(!$r->seats)
        {
            return redirect()->back()->withErrors(['choose seat']);
        }
        else{
            $order = new orders();
            $order->id_user= Auth::user()->id;
            $order->order_number = time();
            $price=studio_movies::join('branch_studio', 'studio_movies.id_branch_studio', '=', 'branch_studio.id_branch_studio')
                ->join('studio','branch_studio.id_studio','=','studio.id_studio')
                ->where('id_studio_movies',$r->studio_movies) ->value('studio.price');;
            $seat=count($r->seats);
            $order->total_price = $price * $seat;
            $order->status=0;
            $order->save();

            $order_movies = new order_movies();
            $order_movies->id_order = orders::pluck('id_order')->last();
            $order_movies->id_studio_movies = studio_movies::where('id_studio_movies',$r->studio_movies)->pluck('id_studio_movies')->first();
            $order_movies->qty = count($r->seats);
            $order_movies->ticket_type=$r->ticket_type;
            $order_movies->seats = implode(" ",$r->seats);
            $order_movies->status=0;
            $order_movies->save();

            return view('web.PaymentSuccess')->with('seat', $seat);
        }

    }

    public function seats($id)
    {
        //$id itu id_studio_movies

        $price = studio_movies::join('branch_studio','branch_studio.id_branch_studio','studio_movies.id_branch_studio')
            ->join('studio','studio.id_studio','branch_studio.id_studio')
            ->where('studio_movies.id_studio_movies',$id)
            ->pluck('studio.price')
            ->first();
        $tickets=tickets::where('status',0)->get();
        $sofa = order_movies::where('id_studio_movies', $id)->pluck('seats');
        $sofa_array = explode(" ", $sofa);
        $dseat = array_merge(...array_map(function ($item) {
            $numbers = explode('","', trim($item, '[]"'));
            return array_map('intval', $numbers);
        }, $sofa_array));

        return view('web.ChoosingSeats',['id'=> $id, 'price' =>$price,'tickets' =>$tickets,'dseat' => $dseat]);
    }
}
