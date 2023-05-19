<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\movies;
use Illuminate\Http\Request;

class updateMovie extends Controller
{
    public function updateMovies()
    {
        return view('manager.update-movies');
    }

    public function editMovies(string $id)
    {
        $movies= movies::find($id);
        return view('manager.update-movies',['movies'=> $movies]);
    }

    public function update(Request $request, string $id)
    {
        $input = movies::findOrFail($id);
        $input->movies_name = $request->input('name');
        //save photo
        $file = $request->file('photo');
       $fileName = $file->getClientOriginalName();
//        blm bisa post photo
         $file->move(public_path('css/public-cust'), $fileName);
        $input->photo = $fileName;
        $input->duration = $request->input('duration');
        $input->director = $request->input('director');
        $input->genre = $request->input('genre');
        $input->rating = $request->input('rating');
        $input->status = $request->input('status');
        $input->save();
        return redirect ('showMovies')->with('flash_message','Updated!');
    }

}
