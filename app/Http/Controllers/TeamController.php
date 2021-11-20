<?php

namespace App\Http\Controllers;

use App\Models\Kemampuan;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
use Illuminate\Support\Str;

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
        $request->validate([
            'image' => 'mimes:jpeg,png,bmp|max:512',
        ]);
        $file = $request->file('image');
        $slug_photo = Str::slug($file->getClientOriginalName(), '-');
        $new_name = Str::random(4).'-'.$slug_photo.'.'.$file->getClientOriginalExtension();
        $file->move(public_path('images_site'), $new_name);
        $team = Team::create([
            'nama_team' => $request->nama_team,
            'jobdes' => $request->jobdes,
            'perusahaan' => $request->perusahaan,
            'deskripsi' => $request->deskripsi,
            'image' =>$new_name,
        ]);
        Alert::success('Berhasil !', 'Team berhasil di perbarui !');
        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $team = Team::with('kemampuans')->find($id);
        $file_foto = Storage::disk('public')->files('foto/'.$id);
        return view('team.show',compact('team','file_foto'));
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
    public function destroy(Request $request,$id)
    {
        Kemampuan::whereIn('id_team',explode(",",$id))->delete();
        $team = Team::find($id);
        $team->delete();

        $destinationPath = storage_path('app/public/foto/'.$id);
        Storage::disk()->delete($destinationPath);
        Alert::success('Berhasil !', 'Team berhasil di Hapus !');
        return redirect()
            ->back();
    }
}
