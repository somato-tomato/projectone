<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Canvas\Models\Post as Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $team = Team::all();
        $video = DB::table('section_videos')->where('id', '=', 1)->first();
        $features = DB::table('section_features')->get();
        $process = DB::table('section_processes')->get();

        $latest = Post::published()->latest()->first();

        return view('welcome', compact('team','video', 'features', 'process', 'latest'));
    }
}
