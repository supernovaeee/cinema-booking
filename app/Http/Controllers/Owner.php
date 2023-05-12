<?php

namespace App\Http\Controllers;

use App\Models\order_detail;
use App\Models\orders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Owner extends Controller
{
    public function fnbDaily(){
        // $orders=orders::all()->where('status', '=', 0);
        // $orders = orders::join('' ()->where('status', '=', 0)->leftjoin
        $orders=order_detail::with(['fnb', 'orders'])->get();
        return view('owner.fnbDaily')->with('orders', $orders);
    }
    public function fnbHour(){
        return view('owner.fnbHour');
    }
    public function fnbWeek(){
        return view('owner.fnbWeek');
    }
    public function fnbMonth(){
        return view('owner.fnbMonth');
    }

    public function ticketDaily(){
        return view('owner.ticketDaily');
    }
    public function ticketHour(){
        return view('owner.ticketHour');
    }
    public function ticketWeek(){
        return view('owner.ticketWeek');
    }
    public function ticketMonth(){
        return view('owner.ticketMonth');
    }

    public function trends(){
        return view('owner.trends');
    }
}
