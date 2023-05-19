<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    //
    public function addtoCart(Request $r){
//        dd($r->product_name);
        Cart::add($r->product_id, $r->product_name, 1, $r->product_price);
        return redirect()->back();
    }
    public function removefromCart($rowId){
        Cart::remove($rowId);
        return redirect()->back();
    }
}
