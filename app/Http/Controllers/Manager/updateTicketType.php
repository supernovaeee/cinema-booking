<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\tickets;
use Illuminate\Http\Request;

class updateTicketType extends Controller
{
    public function updateTicketType(string $id)
    {
        $tickets= tickets::find($id);
        return view('manager.update-ticket-type',['tickets'=> $tickets]);
    }

    public function updateTicket(Request $request, string $id)
    {
        $input = tickets::findOrFail($id);
        $input->type = $request->input('type');
        $input->price = $request->input('price');
        $input->status = $request->input('status');
        $input->save();
        return redirect ('showTicketType')->with('flash_message','Updated!');
    }

}
