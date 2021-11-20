<?php

namespace App\Http\Controllers;

use App\Models\Feedrequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FeedrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ok = Feedrequest::orderBy('created_at','ASC')->get();
        return view('request.index',compact('ok'));
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
        Feedrequest::create($request->all());
        Alert::success('Berhasil !', 'Feed Request  berhasil di Tersimpan !');
        return view('welcome');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedrequest  $feedrequest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ok = Feedrequest::where('id', $id)->first();

        return view('request.index',compact('ok'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feedrequest  $feedrequest
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedrequest $feedrequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feedrequest  $feedrequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedrequest $feedrequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedrequest  $feedrequest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Feedrequest::find($id);
        $team->delete();
       Alert::success('Berhasil !', 'Request berhasil di Hapus !');
        return redirect()
            ->back();
    }
}
