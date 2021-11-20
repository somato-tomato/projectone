<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofolio = Portofolio::orderBy('created_at', 'DESC')->paginate(10);

        return view('portofolio.index',compact('portofolio'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portofolio.create');
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
            'foto' => 'mimes:jpeg,png,bmp|max:512',
        ]);
        $file = $request->file('foto');
        $slug_photo = Str::slug($file->getClientOriginalName(), '-');
        $new_name = Str::random(4).'-'.$slug_photo.'.'.$file->getClientOriginalExtension();
        $file->move(public_path('images_site'), $new_name);

        $team = Portofolio::create([
            'nama_portofolio' => $request->nama_portofolio,
            'deskripsi' => $request->deskripsi,
            'image' => $new_name,
        ]);
        Alert::success('Berhasil !', 'Portofolio berhasil di perbarui !');

        return redirect()->route('portofolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $team = Portofolio::find($id);
        $file_foto = Storage::disk('public')->files('portofolio/'.$id);
        return view('portofolio.show',compact('team','file_foto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $portofolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $team = Portofolio::find($id);
        $team->delete();

        $destinationPath = storage_path('app/public/portofolio/'.$id);
        Storage::disk()->delete($destinationPath);
        Alert::success('Berhasil !', 'Team berhasil di Hapus !');
        return redirect()
            ->back();
    }
}
