<?php

namespace App\Http\Controllers;

use App\WebConfig;
use Illuminate\Http\Request;
use Auth;

class WebConfigController extends Controller
{


    public function __construct()
    {
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
        $webconfigs = WebConfig::all();
        return view('admin.webconfigs.index',compact('webconfigs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.webconfigs.form');
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
        $this->validate($request, [
            'key' => 'required|max:100',
            'value' => 'required|max:255',
        ]);

        // $var = $request->toArray();
        // dd($var);
        $data=$request->except('[_token]');
        $webConfig=Webconfig::create($data);

        return redirect()->route('webconfigs.index')->with('sucess_message', 'Record Inserted Successfully..!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WebConfig  $webConfig
     * @return \Illuminate\Http\Response
     */
    public function show(WebConfig $webconfig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WebConfig  $webConfig
     * @return \Illuminate\Http\Response
     */
    public function edit(WebConfig $webconfig)
    {
        //
        //dd($webconfig);
        return view('admin.webconfigs.form',compact('webconfig'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WebConfig  $webConfig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebConfig $webconfig)
    {
        //
        $this->validate($request, [
            'key' => 'required|max:100',
            'value' => 'required|max:255',
        ]);

        // $var=$request->toArray();
        // dd($var);
        $webconfig->update($request->except('_token','_method'));

        return redirect()->route('webconfigs.index')->with('sucess_message','Record Updated Successfully..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WebConfig  $webConfig
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebConfig $webconfig)
    {
        //
        $webconfig->delete();
        return redirect()->route('webconfigs.index')->with('success_message','Record Deleted successfully.');   
    }
}
