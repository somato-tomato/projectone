<?php

namespace App\Http\Controllers;

use App\Models\Kemampuan;
use App\Models\Team;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::orderBy('created_at', 'DESC')->paginate(10);
        return view('team.index',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('team.create');
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
        $team = Team::create($request->only(['nama_team', 'jobdes', 'perusahaan', 'deskripsi']));
        for ($nama_kemampuan = 0; $nama_kemampuan < count($request->nama_kemampuan); $nama_kemampuan++) {
            $orderdetail = new Kemampuan;
            $orderdetail->id_team = $team->id;
            $orderdetail->nama_kemampuan = $request->nama_kemampuan[$nama_kemampuan];
            $orderdetail->range_kemampuan = $request->range_kemampuan[$nama_kemampuan];
            $orderdetail->save();
        }
        Alert::success('Berhasil !', 'Team berhasil di perbarui !');
        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
