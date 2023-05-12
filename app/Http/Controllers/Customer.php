<?php

namespace App\Http\Controllers;

use App\Models\order_movies;
use App\Models\studio;
use Illuminate\Http\Request;
use App\Models\branch;
use App\Models\branch_studio;
use App\Models\fnb;
use App\Models\movies;
use App\Models\studio_movies;
use App\Models\orders;
use App\Models\order_detail;
use App\Models\tickets;
use App\Models\users;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
Use Cart;

class Customer extends Controller
{
    public function home()
    {
        $movies = movies::where('screening_status',1)->get();
        $soon = movies::where('screening_status',0)->get();
        $food = fnb::all();
        return view('web.home',['movies'=>$movies,'soon'=>$soon,'food'=>$food]);
    }
    public function myTicket()
    {
        $movies=orders::leftjoin('order_movies','orders.id_order','order_movies.id_order')
            ->join('studio_movies','studio_movies.id_studio_movies','=','order_movies.id_studio_movies')
            ->join('movies','movies.id_movies','=','studio_movies.id_movies')
            ->join('branch_studio','branch_studio.id_branch_studio','=','studio_movies.id_branch_studio')
            ->join('branch','branch.id_branch','=','branch_studio.id_branch')
            ->join('studio','studio.id_studio','=','branch_studio.id_studio')->get();
        $food=orders::join('order_detail','orders.id_order','=','order_detail.id_order')
            ->join('fnb','fnb.id_fnb','=','order_detail.id_fnb')->get();
        return view('web.MyTicketTransactionList',['movies'=>$movies,'food'=>$food]);
    }
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
            $order_movies->seats = implode(" ",$r->seats);
            $order_movies->status=0;
            $order_movies->save();

            //add loyalty poin
            $last_point = \App\Models\User::where('id',Auth::user()->id)->pluck('loyalty')->first();
            $point = ($price * $seat)*0.1;
            \App\Models\User::where('id',Auth::user()->id)->update([
                'loyalty'=> $last_point + $point
            ]);


            return view('web.PaymentSuccess')->with('seat', $seat);
        }

    }

    public function seats($id)
    {
        //$id id_studio_movies

        $price = studio_movies::join('branch_studio','branch_studio.id_branch_studio','studio_movies.id_branch_studio')
            ->join('studio','studio.id_studio','branch_studio.id_studio')
            ->where('studio_movies.id_studio_movies',$id)
            ->pluck('studio.price')
            ->first();

        return view('web.ChoosingSeats',['id'=> $id, 'price' =>$price]);
}

    public function payment(Request $r)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors(['Login First!']);
        } else if (!$r->qty) {
            return redirect()->back()->withErrors(['choose food']);
        } else {
            $order = new orders();
            $order->id_user = Auth::user()->id;
            $order->order_number = time();
            $order->total_price = $r->total;
            $order->status = 0;
            $order->save();
            $cart=Cart::content();
            foreach($cart as $i) {
                $order_detail = new orders_detail();
                $order_detail->id_order = orders::pluck('id_order')->last();
                $name=$i->name;
                $id_fnb=intval(fnb::where('fnb_name',$name)->value('id_fnb'));
                $order_detail->id_fnb = $id_fnb;
                $order_detail->qty = $i->qty;
                $order_detail->status = 0;
                $order_detail->save();
            }
            //add loyalty poin
            $last_point = \App\Models\User::where('id', Auth::user()->id)->pluck('loyalty')->first();
            $point = $r->total * 0.1;
            \App\Models\User::where('id', Auth::user()->id)->update([
                'loyalty' => $last_point + $point
            ]);
            return view('web.PaymentSuccess');
        }
    }


    public function food()
    {
        $food = fnb::all();
        return view('web.FoodAndBeverage',['food'=>$food]);
    }


    public function login()
    {
        return view('web.Login');
    }

    public function signup()
    {
        return view('web.SignUpTixID');
    }

}