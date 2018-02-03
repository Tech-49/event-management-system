<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Role;
use DB;
use Auth;

class RoleController extends Controller
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
        $roles = Role::all();
        //$roles=Role::get();
        //dd($roles);
        return view('admin.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //dd('create record..');
        return view('admin.roles.form');
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
            'name' => 'required|max:100',
        ]);

        // $var = $request->toArray();
        // dd($var);
        $data=$request->except('[_token]');
        $role=Role::create($data);

        return redirect()->route('roles.index')->with('sucess_message', 'Record Inserted Successfully..!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
        //dd($role);
         return view('admin.roles.form',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
        $this->validate($request, [
            'name' => 'required|max:100',
        ]);

        // $var=$request->toArray();
        // dd($var);
        $role->update($request->except('_token','_method'));

        return redirect()->route('roles.index')->with('sucess_message','Record Updated Successfully..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
        // $var =$role->toArray();
        // dd($var);
        $role->delete();
        return redirect()->route('roles.index')->with('success_message','Record Deleted successfully.');   
    }
}
