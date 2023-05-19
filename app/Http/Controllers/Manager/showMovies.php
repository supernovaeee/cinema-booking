<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\branch_studio;
use App\Models\fnb;
use App\Models\movies;
use App\Models\studio_movies;
use App\Models\tickets;
use App\Models\users;
use Carbon\Carbon;
use Illuminate\Http\Request;

class showMovies extends Controller
{
    public function createFb()
    {
        return view('manager.create-fb');
    }
    public function createMovies()
    {
        return view('manager.create-movies');
    }
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

        $time = Carbon::createFromFormat('Y-m-d H:i', $request->input('datetime'));
        $branch_stud=intval($request->input('branch-studio'));
        // Check if there is a previous film scheduled
        $previousFilm = studio_movies:: leftJoin('movies','movies.id_movies','studio_movies.id_movies')
                        ->where('id_branch_studio',  $branch_stud)
                        ->orderBy('studio_movies.time')
                        ->first();

        if ($previousFilm) {
            $previousEndTime = Carbon::createFromFormat('H:i', $previousFilm->time)
                ->addMinutes($previousFilm->duration)
                ->addMinutes(15);

            if ($time->lt($previousEndTime)) {
                return redirect()->back()->withErrors('The film must start at least 15 minutes after the previous film.');
            }
        }

        // Create new movie schedule
        $movieSchedule = new studio_movies();
        $movieSchedule->id_branch_studio = $request->input('branch-studio');;
        $movieSchedule->id_movies = $request->input('movies');;
        $movieSchedule->time = $time;
        $movieSchedule->save();

        return redirect ('showScreening')->with('flash_message','Added!');
    }

    public function createTicketType()
    {
        return view('manager.create-ticket-type');
    }
    public function showFnB()
    {
        $fnb=fnb::all();
        return view('manager.f-b',['fnb'=> $fnb]);
    }
    public function index()
    {
        return view('manager.index');
    }
    public function showMovies()
    {
        $movies=movies::all();
        return view('manager.movies',['movies'=> $movies]);
    }
    public function store(Request $request)
    {
        $input = new movies();
        $input->movies_name = $request->input('name');
        //save photo
        $file = $request->file('photo');
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        //blm bisa post photo
        $file->storeAs('public/css/public-cust', $fileName);
        $input->photo = $fileName;
        $input->duration = $request->input('duration');
        $input->director = $request->input('director');
        $input->genre = $request->input('genre');
        $input->rating = $request->input('rating');
        $input->status = $request->input('status');
        $input->save();
        return redirect ('showMovies')->with('flash_message','User Added!');
    }
    public function deleteMovies(string $id)
    {
        $user = movies::find($id);
        $user->screening_status =2;
        $user->save();
        return redirect ('showMovies')->with('flash_message','Deleted!');
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
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        //blm bisa post photo
        $file->storeAs('public/css/public-cust', $fileName);
        $input->photo = $fileName;
        $input->duration = $request->input('duration');
        $input->director = $request->input('director');
        $input->genre = $request->input('genre');
        $input->rating = $request->input('rating');
        $input->status = $request->input('status');
        $input->save();
        return redirect ('showMovies')->with('flash_message','Updated!');
    }

    public function updateTicket(Request $request, string $id)
    {
        $input = tickets::findOrFail($id);
        $input->type = $request->input('type');
        $input->price = $request->input('price');
        $input->status = $request->input('status');
        $input->save();
        return redirect ('showTicketType')->with('flash_message','Updated!');
    }

    public function showScreening()
    {
        $studio = studio_movies::leftJoin('branch_studio','branch_studio.id_branch_studio','studio_movies.id_branch_studio')
            ->leftJoin('studio','studio.id_studio','branch_studio.id_studio')
            ->leftJoin('movies','movies.id_movies','studio_movies.id_movies')
            ->leftJoin('branch','branch.id_branch','branch_studio.id_branch')
            ->get();
        return view('manager.screening',['studio'=> $studio]);
    }

    public function deleteScreening(string $id)
    {
        $record = studio_movies::findOrFail($id);
        $record->delete();

        return redirect()->back()->with('success', 'Record deleted successfully.');
    }

    public function showTicketType()
    {
        $tickets= tickets::all();
        return view('manager.ticket-type',['tickets'=> $tickets]);
    }
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
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        //blm bisa post photo
        $file->storeAs('public/css/public-cust', $fileName);
        $input->fnb_photo = $fileName;
        $input->fnb_desc = $request->input('desc');
        $input->fnb_type = $request->input('type');
        $input->status = $request->input('status');
        $input->price = $request->input('price');
        $input->save();
        return redirect ('showFnB')->with('flash_message','Updated!');
    }

    public function storeFood(Request $request)
    {
        $input = new fnb();
        $input->fnb_name = $request->input('name');
        //save photo
        $file = $request->file('photo');
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        //blm bisa post photo
        $file->storeAs('public/css/public-cust', $fileName);
        $input->fnb_photo = $fileName;
        $input->fnb_desc = $request->input('desc');
        $input->fnb_type = $request->input('type');
        $input->status = $request->input('status');
        $input->price = $request->input('price');
        $input->save();
        return redirect ('showFnB')->with('flash_message','Saved!');
    }

    public function storeTickets(Request $request)
    {
        $input = new tickets();
        $input->type = $request->input('type');
        $input->price = $request->input('price');
        $input->status = $request->input('status');
        $input->save();
        return redirect ('showTicketType')->with('flash_message','Saved!');
    }
    public function deleteFood(string $id)
    {
        $user = fnb::find($id);
        $user->status =1;
        $user->save();
        return redirect ('showFnB')->with('flash_message','Deleted!');
    }
    public function deleteTickets(string $id)
    {
        $user = tickets::find($id);
        $user->status =1;
        $user->save();
        return redirect ('showTicketType')->with('flash_message','Deleted!');
    }


    public function updateMovies()
    {
        return view('manager.update-movies');
    }
    public function updateTicketType(string $id)
    {
        $tickets= tickets::find($id);
        return view('manager.update-ticket-type',['tickets'=> $tickets]);
    }




}
