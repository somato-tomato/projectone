<?php

namespace App\Http\Controllers;

use App\Models\ClientLogo;
use App\Models\SectionFeature;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
class ClientLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ok = ClientLogo::orderBy('created_at','ASC')->get();

        return view('clientlogo.index',compact('ok'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('clientlogo.create');
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
        $team = ClientLogo::create([
            'image' => $new_name,
        ]);
        Alert::success('Berhasil !', 'clientlogo berhasil di perbarui !');

        return redirect()->route('clientlogo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = ClientLogo::find($id);
        $team->delete();
        File::delete('images_site/'.$team->image);
        Alert::success('Berhasil !', 'Team berhasil di Hapus !');
        return redirect()
            ->back();
    }
}
