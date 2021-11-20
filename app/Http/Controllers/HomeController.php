<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Canvas\Models\Post as Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function home()
    {
        $team = Team::paginate(3);


        $file_foto1 = Storage::disk('public')->files('foto/3');
        $file_foto2 = Storage::disk('public')->files('foto/4');
        $file_foto3 = Storage::disk('public')->files('foto/5');
        $video = DB::table('section_videos')->where('id', '=', 1)->first();
        $features = DB::table('section_features')->get();
        $process = DB::table('section_processes')->get();

        $latest = Post::published()->latest()->first();

        return view('welcome', compact('file_foto1','file_foto2','file_foto3','team','video', 'features', 'process', 'latest'));
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
}
