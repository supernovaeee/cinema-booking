<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\tickets;
use Illuminate\Http\Request;

class createTicketType extends Controller
{
    public function createTicketType()
    {
        return view('manager.create-ticket-type');
    }

    public function storeTickets(Request $request)
    {
        $input = new tickets();
        $input->type = $request->input('type');
        $input->price = $request->input('price');
        $input->status = $request->input('status');
        $input->save();
        return redirect ('showTicketType')->with('flash_message','Saved!');
    }
}
