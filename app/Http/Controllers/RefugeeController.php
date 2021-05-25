<?php

namespace App\Http\Controllers;

use App\Refugee;
use Illuminate\Http\Request;

class RefugeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.refugee')->with(['data' =>  Refugee::where('state', 0)->get()]);
    }
    public function accepted()
    {
        return view('dashboard.pages.refugee_accepted')->with(['data' =>  Refugee::where('state', 1)->get()]);
    }
    public function rejected()
    {
        return view('dashboard.pages.refugee_rejected')->with(['data' =>  Refugee::where('state', 2)->get()]);
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
     * @param  \App\Refugee  $refugee
     * @return \Illuminate\Http\Response
     */
    public function show(Refugee $refugee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Refugee  $refugee
     * @return \Illuminate\Http\Response
     */
    public function edit(Refugee $refugee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Refugee  $refugee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Refugee $refugee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Refugee  $refugee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refugee $refugee)
    {
        //
    }
    public function state($id, $state)
    {
        $update = Refugee::findOrFail($id);
        $update->state = $state;
        $update->update();
        return redirect()->back()->withSuccess('Send request succesfully !');
    }
}
