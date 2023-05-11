<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\fnb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class showFnb extends Controller
{
    public function food()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors(['Login First!']);
        } else {
            $food = fnb::all();
            return view('web.FoodAndBeverage', ['food' => $food]);
        }
    }
}