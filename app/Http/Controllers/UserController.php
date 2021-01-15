<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $usuarios = User::all();


          return view('users.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validation = $request->validate([
            'name'=>['required'],
            'email'=>['required']
        ]);


        User::create([
            'name'=>$request->name,
            'email'=>$request->email
            ]);

        return redirect()->back()->with('status','User created with success');
        // return redirect()->route('list');


    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

           $user = User::where('id',$id)->first();

           return view('users.edit', compact('user'));

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update( $id, Request $request)
    {

     $user = User::find($id);

     $user->name = $request->nome;
     $user->email = $request->email;

     $user->save();
      return redirect()->route('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

      User::where('id',$id)->delete();
      return redirect()->route('list');
    }
}
