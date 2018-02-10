<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Event;
use App\WebConfig;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::where('end_date','>=',date("Y-m-d"))->get();
        //dump($events);
        return view('welcome',compact('events'));
    }
    public function event_detail($event_id)
    {
        $event= Event::findOrFail($event_id);
       
        //dd($config);
        //dd($event);
        return view('event_detail',compact('event'));
    }
}
