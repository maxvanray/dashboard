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
    	$calendar = Calendar::create($request->all());
        return response()->json($calendar);
        // $calendar_event = New Calendar();
        // $calendar_event->title;
        // $calendar_event->description;
        // $calendar_event->startDate;
        // $calendar_event->endDate;
        // $calendar_event->startTime;
        // $calendar_event->endDate;
        // $calendar_event->backgroundColor;
        // $calendar_event->facilitator;
        // $calendar_event->location;
        // $calendar_event->createdBy;
        // $calendar_event->save();
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
        $calendar = Calendar::find($id)->update($request->all());
        return response()->json($calendar);
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
