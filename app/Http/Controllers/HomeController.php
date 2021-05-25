<?php

namespace App\Http\Controllers;

use App\OurOffice;
use App\OurTeam;
use App\Refugee;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $team = OurTeam::all();
        $location = OurOffice::all();
        return view('website.pages.index')->with(['team' => $team, 'location' => $location]);
        // return view('dashboard.pages.index');
    }
    public function indexDashboard()
    {

        return view('dashboard.pages.index');
    }
    public function form()
    {

        return view('website.pages.form ');
        // return view('dashboard.pages.index');
    }
    public function datasend(Request $request)
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
        $insert->save();

        return redirect()->back()->withSuccess('Send request succesfully !');
    }
}
