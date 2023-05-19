<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class downloadReport extends Controller
{
    public function downloadReport(){
        return view('owner.downloadReport');
    }
}
