<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\fnb;
use Illuminate\Http\Request;

class createFnb extends Controller
{
    public function createFb()
    {
        return view('manager.create-fb');
    }

    public function storeFood(Request $request)
    {
        $input = new fnb();
        $input->fnb_name = $request->input('name');
        //save photo
        $file = $request->file('photo');
        $fileName = $file->getClientOriginalName();
//        blm bisa post photo
        $file->move(public_path('css/public-cust'), $fileName);
        $input->fnb_photo = $fileName;
        $input->fnb_desc = $request->input('desc');
        $input->fnb_type = $request->input('type');
        $input->status = $request->input('status');
        $input->price = $request->input('price');
        $input->save();
        return redirect ('showFnB')->with('flash_message','Saved!');
    }

}
