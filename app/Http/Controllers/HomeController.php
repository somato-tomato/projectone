<?php

namespace App\Http\Controllers;

use App\Models\ClientLogo;
use App\Models\Experience;
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

    public function testFront()
    {
        $team = Team::paginate(3);
        $portofolio = Portofolio::paginate(9);
        $package = Package::with('package_bodies')->get();
        $testi = Testimony::get();
        $client = ClientLogo::get();

        $expe = Experience::find(1);
        $video = DB::table('section_videos')->where('id', '=', 1)->first();
        $features = DB::table('section_features')->get();
        $process = DB::table('section_processes')->get();

        $latest = Post::published()->latest()->first();

        return view('welcome_old', compact('expe','client','team','video', 'features', 'process', 'latest', 'portofolio', 'package', 'testi'));
    }

    public function feedrequests(Request $request)
    {
        Feedrequest::create($request->all());
        Alert::success('Berhasil !', 'Request berhasil di Simpan !');

        return redirect()->back();

    }
//    function load_data(Request $request)
//    {
//        if ($request->ajax()) {
//            if ($request->id > 0) {
//                $data = DB::table('portofolios')
//                    ->where('id', '<', $request->id)
//                    ->orderBy('id', 'DESC')
//                    ->limit(5)
//                    ->get();
//            } else {
//                $data = DB::table('portofolios')
//                    ->orderBy('id', 'DESC')
//                    ->limit(5)
//                    ->get();
//            }
//            $output = '';
//            $last_id = '';
//            if (!$data->isEmpty()) {
//                foreach($data as $portofolios) {
//                    $output .= '
//                    div class="cbp-item itemshadow" >
//                        <img src = "'.asset('images_site/'.$portofolios->image).'" alt = "" style = "height:500px" >
//                        <div class="overlay center-block whitecolor" >
//                            <a class="plus" data - fancybox = "gallery" href = "'.asset('images_site/'.$portofolios->image).'" ></a >
//                            <h4 class="top30" >'.$portofolios->nama_portofolio.'</h4 >
//                            <p >'.$portofolios->deskripsi.'</p >
//                        </div >
//                    </div >
//                      ';
//                    $last_id = $portofolios->id;
//                    }
//                $output .= '
//       <div id="load_more">
//        <button type="button" name="load_more_button" class="btn btn-success form-control" data-id="' . $last_id . '" id="load_more_button">Load More</button>
//       </div>
//       ';
//            } else {
//                $output .= '
//       <div id="load_more">
//        <button type="button" name="load_more_button" class="btn btn-info form-control">No Data Found</button>
//       </div>
//       ';
//            }
//            echo $output;
//        }
//    }
}
