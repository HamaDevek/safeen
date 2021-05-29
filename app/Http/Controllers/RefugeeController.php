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
        $request->validate([
            'nawy_baxewkar' => 'required|string|max:255',
            'nawy_xezan' => 'string|max:255',
            'talafon' => 'required|string|max:15',
            'shweny_nishtaje_esa' => 'required|string|max:255',
            'shweny_nishtaje_peshu' => 'required|string|max:255',
            'zh_mnal' => 'required|string|max:2',
            'nawxo' => 'sometimes|in:on,null',
            'pisha' => 'string|max:255',
            'din' => 'required|string|max:255',
            'xawankary' =>  'sometimes|in:on,null',
            'zanyarytr' => 'required|string|max:1000',
            'document' => 'sometimes|image|mimes:jpeg,png,jpg,gif,pdf|max:8192',
        ]);
        $insert = new Refugee;
        $insert->nawy_baxewkar =  $request->nawy_baxewkar;
        $insert->nawy_xezan =  $request->nawy_xezan;
        $insert->talafon =  $request->talafon;
        $insert->shweny_nishtaje_esa =  $request->shweny_nishtaje_esa;
        $insert->shweny_nishtaje_peshu =  $request->shweny_nishtaje_peshu;
        $insert->zh_mnal =  $request->zh_mnal;
        $insert->baryxezan =  $request->baryxezan;
        $insert->nawxo =  $request->nawxo == 'on' ? 1 : 0;
        $insert->pisha =  $request->pisha;
        $insert->din =  $request->din;
        $insert->xawankary =  $request->xawankary == 'on' ? 1 : 0;
        $insert->zanyarytr =  $request->zanyarytr;
        $insert->document =  $request->document->store('uploads', 'public');
        $insert->created_by =  auth()->id();
        $insert->save();

        return redirect()->back()->withSuccess('Send request succesfully !');
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
    public function destroy($id     )
    {

        $delete = Refugee::findOrFail($id);
        $delete->delete();
        return redirect()->back()->withSuccess('Delete refugee succesfully !');
    }
    public function state($id, $state)
    {
        $update = Refugee::findOrFail($id);
        $update->state = $state;
        $update->update();
        return redirect()->back()->withSuccess('Send request succesfully !');
    }
}
