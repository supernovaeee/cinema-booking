<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Owner extends Controller
{
    public function fnbDaily(){
        return view('owner.fnbDaily');
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
