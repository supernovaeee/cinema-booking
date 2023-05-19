<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\studio_movies;
use Illuminate\Http\Request;

class showScreening extends Controller
{
    public function showScreening()
    {
        $studio = studio_movies::leftJoin('branch_studio','branch_studio.id_branch_studio','studio_movies.id_branch_studio')
            ->leftJoin('studio','studio.id_studio','branch_studio.id_studio')
            ->leftJoin('movies','movies.id_movies','studio_movies.id_movies')
            ->leftJoin('branch','branch.id_branch','branch_studio.id_branch')
            ->get();
        return view('manager.screening',['studio'=> $studio]);
    }
}
