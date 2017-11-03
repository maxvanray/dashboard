<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Activities;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guests(Request $request)
    {
        $user = User::find(1);
        $guests = User::get();
        $activities = Activities::where('user_id', '=', 1)->get();

        return view('dashboard/guests', [
            'user' => $user, 
            'guests' => $guests,
            'activities' => $activities
        ]);
    }

    public function staff(Request $request)
    {
        $user = User::find(1);
        $staff = DB::table('user_admin')
            ->leftJoin('users', 'users.id', '=', 'user_admin.user_id')
            ->get();
        $activities = Activities::where('user_id', '=', 1)->get();

        return view('dashboard/staff', [
            'user' => $user, 
            'staff'=> $staff,
            'activities' => $activities
        ]);
    }

    public function addUser(Request $request)
    {
        $user = User::find(1);
        $activities = Activities::where('user_id', '=', 1)->get();

        return view('dashboard/edit_user', [
            'user' => $user, 
            'activities' => $activities
        ]);
    }

     public function profile(Request $request)
    {
        $user = User::find(1);
        $guests = User::get();
        $activities = Activities::where('user_id', '=', 1)->get();

        return view('dashboard/user_profile', [
            'user' => $user, 
            'guests' => $guests,
            'activities' => $activities
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id='')
    {
        $user = User::find(1);
        //return $user;
        return view('dashboard/edit_user', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
