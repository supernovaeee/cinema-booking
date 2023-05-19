<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\fnb;
use Illuminate\Http\Request;

class showFnb extends Controller
{
    public function showFnB()
    {
        $fnb=fnb::all();
        return view('manager.f-b',['fnb'=> $fnb]);
    }
}
