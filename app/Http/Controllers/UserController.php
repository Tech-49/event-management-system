<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use \Crypt;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $users=User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.form');
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
            'email' => 'required|max:100',
            'password' => 'required|max:100',
            'phone_no' => 'required|max:100',
        ]);

        $file = $request->file('profilepic');
        $input['imagename']=time().'.'.$file->getClientOriginalExtension();
        $destinationPath=public_path('img');
        //dd($file);
        $name = $file->getClientOriginalName();
        $password=$request->password;
        $password1=bcrypt($password);

        $file->move($destinationPath,$name);
        
         $this->validate($request, [
            'name' => 'required|max:100',
        ]);
        // $var = $request->toArray();
        // dd($var);
        $data=$request->except('[_token]');
        //$data['user_id'] = Auth::user()->id;
        $data['profilepic']=$name;
        // dd($data);
        $data['password']=$password1;

        $user=User::create($data);
        return redirect()->route('users.index')->with('sucess_message', 'Record Inserted Successfully..!');
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
    public function edit(User $user)
    {
        //
         // $password=$user->password;
         // $dpassword= Crypt::decrypt($passwords);
         // dd($dpassword);
        return view('admin.users.form',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
            //
            $file = $request->file('profilepic');
            $data=$request->except('_token','_method','profilepic');
            if(isset($file))
            {
                $destinationPath=public_path('img');
                //dd($file);
                $name = $file->getClientOriginalName();
                //dd($name);
                $file->move($destinationPath,$name);
                //$request->request->remove('picture');
                // $request->request->add(['picture'=> $name]);
                $data['profilepic']=$name;
            }

         $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            'password' => 'required|max:100',
            'phone_no' => 'required|max:100',
        ]);

        // $var=$request->toArray();
        // dd($var);
        $user->update($data);
        return redirect()->route('users.index')->with('sucess_message','Record Updated Successfully..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect()->route('users.index')->with('success_message','Record Deleted successfully.'); 
    }
}
