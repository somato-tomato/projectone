<?php

namespace App\Http\Controllers;

use App\Models\Kemampuan;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
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
        $file = $request->file('foto');

        if (!empty($file)) {
            Storage::disk('local')->makeDirectory('public/foto/'.$team->id, 0775, true);
            $destinationPath = storage_path('app/public/foto/'.$team->id);
            Storage::makeDirectory($destinationPath);
            $filesname =$file->getClientOriginalName();
            $image_resize = Image::make($file->getRealPath());
            $image_resize->resize(400, 400);
            $image_resize->save($destinationPath.'/foto.' . $filesname, 80);
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
