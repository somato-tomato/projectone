<?php

namespace App\Http\Controllers;

use App\Models\Kemampuan;
use App\Models\Package;
use App\Models\PackageBody;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package= Package::orderBy('created_at', 'DESC')->paginate(10);

        return view('package.index',compact('package'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $package = Package::create($request->all());

        for ($nama_kemampuan = 0; $nama_kemampuan < count($request->nama_kemampuan); $nama_kemampuan++) {
            $orderdetail = new PackageBody;
            $orderdetail->id_package = $package->id;
            $orderdetail->content = $request->nama_kemampuan[$nama_kemampuan];
            $orderdetail->save();
        }
        Alert::success('Berhasil !', 'Package berhasil di perbarui !');
        return redirect()->route('package.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $group = Package::where('id', $id)->first();
        $group1 = PackageBody::where('id_package', $id)->get();

        return view('package.show',compact('group','group1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $team)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        Package::whereIn('id_package',explode(",",$id))->delete();
        Alert::success('Berhasil !', 'Package berhasil di Hapus !');
        return redirect()
            ->back();
    }
}
