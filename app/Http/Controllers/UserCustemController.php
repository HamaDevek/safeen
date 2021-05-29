<?php

namespace App\Http\Controllers;

use App\User;
use App\UserCustem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserCustemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.user')->with(['data' =>   User::where('id', '!=', auth()->id())->where('id', '!=', 1)->get()]);
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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:users,email',
            'password' => 'required|string|max:255|confirmed|min:8',
        ]);
        $insert = new User;
        $insert->email =  $request->email;
        $insert->name =  $request->name;
        $insert->password =  Hash::make($request->password);
        $insert->created_by =  auth()->id();
        $insert->save();

        return redirect()->back()->withSuccess('Added User Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserCustem  $userCustem
     * @return \Illuminate\Http\Response
     */
    public function show(UserCustem $userCustem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserCustem  $userCustem
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.pages.user')->with(['single' =>  User::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserCustem  $userCustem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:users,email,' . $id,
            'password' => 'required|string|max:255|confirmed|min:8',
        ]);
        $update =  User::findOrFail($id);
        $update->email =  $request->email;
        $update->name =  $request->name;
        $update->password =  Hash::make($request->password);
        $update->created_by =  auth()->id();
        $update->save();

        return redirect()->back()->withSuccess('Added User Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserCustem  $userCustem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->withSuccess('Remove Admin Successfully !');
    }
}
