<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Calendar;
use App\Event;
use App\User;
use Auth;


class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $events = Event::all();

        return view('dashboard/calendar', [
            'user' => $user, 
            'events' => $events
        ]);
    }

    public function calendarList()
    {
    	$calendar = Calendar::all();
    	return response( $this->transformCollection($calendar) );
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
    public function edit($id)
    {
        //
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


	/**
     * @param $parameters
     * @return array
     */
    private function transformCollection($parameters)
    {
        $collection = array_map( [$this, 'transform'], $parameters->toArray() );
        return $collection;
    }

    /**
     * @param $param
     * @return array
     */
    private function transform($param)
    {
        return [
            'id' => ($param['id'] === null ? '' : $param['id']),
            'title' => ($param['title'] === null ? '' : $param['title']),
            'start' => ($param['startDate'] === null ? '' : $param['startDate']),
            'end' => ($param['endDate'] === null ? '' : $param['endDate']),
        ];
    }


}
