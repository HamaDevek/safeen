<?php

namespace App\Http\Controllers;

use App\OurOffice;
use Illuminate\Http\Request;

class OurOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pages.ouroffice')->with(['data' =>  OurOffice::all()]);
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
            'title' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'link_googl_map' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:8192',
        ]);
        $insert = new OurOffice;
        $insert->title =  $request->title;
        $insert->address =  $request->address;
        $insert->link_googl_map =  $request->link_googl_map;
        $insert->image =  $request->image->store('uploads', 'public');
        $insert->save();

        return redirect()->back()->withSuccess('Added Location Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OurOffice  $ourOffice
     * @return \Illuminate\Http\Response
     */
    public function show(OurOffice $ourOffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OurOffice  $ourOffice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.pages.ouroffice')->with(['single' =>  OurOffice::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OurOffice  $ourOffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'link_googl_map' => 'required|string|max:255',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:8192',
        ]);
        $update = OurOffice::findOrFail($id);
        $update->title =  $request->title;
        $update->address =  $request->address;
        $update->link_googl_map =  $request->link_googl_map;
        $update->image = isset($request->image) ?  $request->image->store('uploads', 'public') : $update->image;
        $update->update();

        return redirect()->back()->withSuccess('Update Location Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OurOffice  $ourOffice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OurOffice::findOrFail($id)->delete();
        return redirect()->back()->withSuccess('Remove Member Successfully !');
    }
}
