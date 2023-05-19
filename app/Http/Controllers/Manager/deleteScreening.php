<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\studio_movies;
use Illuminate\Http\Request;

class deleteScreening extends Controller
{
    public function deleteScreening(string $id)
    {
        $record = studio_movies::findOrFail($id);
        $record->delete();

        return redirect()->back()->with('success', 'Record deleted successfully.');
    }
}
