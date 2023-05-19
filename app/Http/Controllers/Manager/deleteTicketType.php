<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\tickets;
use Illuminate\Http\Request;

class deleteTicketType extends Controller
{
    public function deleteTickets(string $id)
    {
        $user = tickets::find($id);
        $user->status =1;
        $user->save();
        return redirect ('showTicketType')->with('flash_message','Deleted!');
    }
}
