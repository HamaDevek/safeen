<?php

namespace App\Http\Controllers;

use App\OurTeam;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.pages.ourteam')->with(['data' =>  OurTeam::all()]);
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
            'email' => 'required|string|max:255|email',
            'position' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:8192',
        ]);
        $insert = new OurTeam;
        $insert->email =  $request->email;
        $insert->name =  $request->name;
        $insert->position =  $request->position;
        $insert->image =  $request->image->store('uploads', 'public');
        $insert->save();

        return redirect()->back()->withSuccess('Added Member Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function show(OurTeam $ourTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.pages.ourteam')->with(['single' =>  OurTeam::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'position' => 'required|string|max:255',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:8192',
        ]);
        $update = OurTeam::findOrFail($id);
        $update->email =  $request->email;
        $update->name =  $request->name;
        $update->position =  $request->position;
        $update->image = isset($request->image) ?  $request->image->store('uploads', 'public') : $update->image;
        $update->update();

        return redirect()->back()->withSuccess('Update Member Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OurTeam  $ourTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OurTeam::findOrFail($id)->delete();
        return redirect()->back()->withSuccess('Remove Member Successfully !');
    }
}
