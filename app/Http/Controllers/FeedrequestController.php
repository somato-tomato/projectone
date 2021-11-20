<?php

namespace App\Http\Controllers;

use App\Models\Feedrequest;
use Illuminate\Http\Request;

class FeedrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedrequest  $feedrequest
     * @return \Illuminate\Http\Response
     */
    public function show(Feedrequest $feedrequest)
    {
        //
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
    public function destroy(Feedrequest $feedrequest)
    {
        //
    }
}
