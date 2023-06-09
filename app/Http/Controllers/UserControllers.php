<?php
namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Http\Request;
use App\User;use DataTables;
class UserControllers extends Controller
{    public function read(){
        $users=users::all()->where('status', '<', 2);        
        return view('sysAdmin.read')->with('users',$users);
    }    public function createPage(){
        return view('sysAdmin.create');    }
    public function deleted(){        
        $users=users::all()->where('status', '=', 2);
        return view('sysAdmin.deleted')->with('users',$users);    }
    public function updatePage($id){        $users = users::findOrFail($id);
        return view('sysAdmin.update', ['users' => $users]);    }
    public function index()
    {        //
    }
    /**     * Show the form for creating a new resource.
     */    public function create()
    {        //
    }
    /**     * Store a newly created resource in storage.
     */    public function store(Request $request)
    {        $users = new users();
        $users->name = $request->name;        
        $users->email = $request->email;
        $users->username = $request->username;        
        $users->password = $request->password;
        $users->role = $request->role;        
        $users->status = $request->status;
        $users->save();        return redirect ('admin-dashboard')->with('flash_message','User Added!');
    }
    /**     * Display the specified resource.
     */    public function show(string $id)
    {        //
    }
    /**     * Show the form for editing the specified resource.
     */    public function edit(string $id)
    {        $users = users::find($id);
        return view('sysAdmin.update')->with('users', $users);    }

    /**     * Update the specified resource in storage.
     */    public function update(Request $request, string $id)
    {        $input = users::findOrFail($id);
        $input->name = $request->input('name');        $input->email = $request->input('email');
        $input->username = $request->input('username');        $input->password = $request->input('password');
        $input->role = $request->input('role');        $input->status = $request->input('status');
        $input->save();        return redirect ('admin-dashboard')->with('flash_message','User Updated!');
    }
    /**     * Remove the specified resource from storage.
     */    public function destroy(string $id)
    {        $user = users::find($id);
        $user->status =2;        $user->save();
        return redirect ('admin-dashboard')->with('flash_message','User Deleted!');    }
    public function restore(string $id)    {
        $user = users::find($id);        $user->status =1;
        $user->save();        return redirect ('admin-deleted')->with('flash_message','User Restored!');
    }}