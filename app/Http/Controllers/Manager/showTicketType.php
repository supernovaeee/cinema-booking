<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\tickets;
use Illuminate\Http\Request;

class showTicketType extends Controller
{
    public function showTicketType()
    {
        $tickets= tickets::all();
        return view('manager.ticket-type',['tickets'=> $tickets]);
    }
}
