<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\fnb;
use Illuminate\Http\Request;

class updateFnb extends Controller
{
    public function updateFnB(string $id)
    {
        $fnb= fnb::find($id);
        return view('manager.update-fb',['fnb'=> $fnb]);
    }

    public function updateFood(Request $request, string $id)
    {
        $input = fnb::findOrFail($id);
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
        return redirect ('showFnB')->with('flash_message','Updated!');
    }
}
