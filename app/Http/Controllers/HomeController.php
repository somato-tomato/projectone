<?php

namespace App\Http\Controllers;

use App\Models\Feedrequest;
use App\Models\Package;
use App\Models\Portofolio;
use App\Models\SiteConfiguration;
use App\Models\Team;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Canvas\Models\Post as Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function home()
    {
        $team = Team::paginate(3);
        $portofolio = Portofolio::paginate(9);
        $package = Package::with('package_bodies')->get();
        $testi = Testimony::get();
        $video = DB::table('section_videos')->where('id', '=', 1)->first();
        $features = DB::table('section_features')->get();
        $process = DB::table('section_processes')->get();
        $latest = Post::published()->latest()->first();
        $site = SiteConfiguration::find(1)->first();
        return view('welcome', compact('site','testi','package','team','video', 'features', 'process', 'latest','portofolio'));
    }
    public function homeold()
    {
        $team = Team::all();
        $video = DB::table('section_videos')->where('id', '=', 1)->first();
        $features = DB::table('section_features')->get();
        $process = DB::table('section_processes')->get();

        $latest = Post::published()->latest()->first();

        return view('welcome', compact('team','video', 'features', 'process', 'latest'));
    }
    public function feedrequests(Request $request)
    {
        Feedrequest::create($request->all());
        Alert::success('Berhasil !', 'Request berhasil di Simpan !');

        return redirect()->back();

    }
}
