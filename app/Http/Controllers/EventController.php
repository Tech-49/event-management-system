<?php

namespace App\Http\Controllers;
use App\Event;
use Auth;

use Illuminate\Http\Request;

class EventController extends Controller
{



    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events=Event::with('user')->get();
        //dd($events);
        return view('admin.events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.events.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file = $request->file('picture');
        $input['imagename']=time().'.'.$file->getClientOriginalExtension();
        $destinationPath=public_path('img');
        //dd($file);
        $name = $file->getClientOriginalName();
        //dd($name);
        $file->move($destinationPath,$name);
        
         $this->validate($request, [
            'name' => 'required|max:100',
        ]);

        // $var = $request->toArray();
        // dd($var);
        $data=$request->except('[_token]');
        $data['user_id'] = Auth::user()->id;
        $data['picture']=$name;
        
      //  dd($data);

        $event=Event::create($data);

        return redirect()->route('events.index')->with('sucess_message', 'Record Inserted Successfully..!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {

        //dd($role);
         return view('admin.events.form',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
        $this->validate($request, [
            'name' => 'required|max:100',
        ]);

        // $var=$request->toArray();
        // dd($var);
        $event->update($request->except('_token','_method'));

        return redirect()->route('events.index')->with('sucess_message','Record Updated Successfully..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
        $event->delete();
        return redirect()->route('events.index')->with('success_message','Record Deleted successfully.'); 
    }
}
