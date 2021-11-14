<?php

namespace App\Http\Controllers;

use App\Models\Kemampuan;
use App\Models\Package;
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
//        $package= Package::orderBy('created_at', 'DESC')->paginate(10);
        $group = Package::all()->groupBy('id_package');

        foreach ($group as $i => $data) {
            $round = 0;
            foreach ($data as $r => $amount) {
                $round += 1;
            }
            $group[$i]->round = $round;
        }
        return view('package.index',compact('group'));
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

        $max = Package::max('id')+1;
        for ($nama_kemampuan = 0; $nama_kemampuan < count($request->nama_kemampuan); $nama_kemampuan++) {
            $orderdetail = new Package();
            $orderdetail->id_package = $max;
            $orderdetail->judul = $request->judul;
            $orderdetail->call = $request->call;
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
        $group = Package::all()->where('id_package', $id)->groupBy('id_package');

        foreach ($group as $i => $data) {
            $round = 0;
            foreach ($data as $r => $amount) {
                $round += 1;
            }
            $group[$i]->round = $round;
        }
        ddd($group);
        return view('package.show',compact('group'));
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
