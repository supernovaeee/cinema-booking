<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\fnb;
use App\Models\orders;
use App\Models\order_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
class purchaseFnb extends Controller
{
    public function addtoCart(Request $r){
//        dd($r->product_name);
        Cart::add($r->product_id, $r->product_name, 1, $r->product_price);
        return redirect()->back();
    }
    public function removefromCart($rowId){
        Cart::remove($rowId);
        return redirect()->back();
    }

    public function payment(Request $r)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors(['Login First!']);
        } else if (!$r->qty) {
            return redirect()->back()->withErrors(['choose food']);
        } else {
            $order = new orders();
            $order->id_user = Auth::user()->id;
            $order->order_number = time();
            $order->total_price = $r->total;
            $order->status = 0;
            $order->save();
            $cart=Cart::content();
            foreach($cart as $i) {
                $order_detail = new order_detail();
                $order_detail->id_order = orders::pluck('id_order')->last();
                $name=$i->name;
                $id_fnb=intval(fnb::where('fnb_name',$name)->value('id_fnb'));
                $order_detail->id_fnb = $id_fnb;
                $order_detail->qty = $i->qty;
                $order_detail->status = 0;
                $order_detail->save();
            }
            //add loyalty poin
            $last_point = \App\Models\User::where('id', Auth::user()->id)->pluck('loyalty')->first();
            $point = $r->total * 0.1;
            \App\Models\User::where('id', Auth::user()->id)->update([
                'loyalty' => $last_point + $point
            ]);
            return view('web.PaymentSuccess');
        }
    }
}