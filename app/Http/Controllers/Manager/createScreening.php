<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use App\Models\branch_studio;
use App\Models\movies;
use App\Models\studio_movies;
use Carbon\Carbon;
use Illuminate\Http\Request;

class createScreening extends Controller
{
    public function createScreening()
    {
        $branch = branch_studio::leftJoin('studio','studio.id_studio','branch_studio.id_studio')
            ->leftJoin('branch','branch.id_branch','branch_studio.id_branch')
            ->get();
        $movies=movies::where('screening_status',1)->get();
        return view('manager.create-screening',['branch'=>$branch,'movies'=>$movies]);
    }

    public function storeScreening(Request $request)
    {
        $rtime=$request->input('datetime').'0';
        $time = Carbon::createFromFormat('Y-m-d H:i:s', $rtime);
        $branch_stud=intval($request->input('branch-studio'));
        // Check if there is a previous film scheduled
        $previousFilm = studio_movies:: leftJoin('movies','movies.id_movies','studio_movies.id_movies')
            ->where('id_branch_studio',  $branch_stud)
            ->orderBy('studio_movies.time')
            ->first();

        if ($previousFilm) {
            $previousEndTime = Carbon::createFromFormat('Y-m-d H:i:s', $previousFilm->time)
                ->addMinutes($previousFilm->duration)
                ->addMinutes(15);

            if ($time->lt($previousEndTime)) {
                return redirect()->back()->withErrors('The film must start at least 15 minutes after the previous film.');
            } else {
                // Create new movie schedule
                $movieSchedule = new studio_movies();
                $movieSchedule->id_branch_studio = $request->input('branch-studio');;
                $movieSchedule->id_movies = $request->input('movies');;
                $movieSchedule->time = $time;
                $movieSchedule->save();

                return redirect ('showScreening')->with('flash_message','Added!');
            }
        }
        return true;
    }


}
