<?php

namespace App\Http\Controllers;

use Canvas\Events\PostViewed as PostViewed;
use Canvas\Models\Post as Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function listPost()
    {
        $posts = Post::published()->latest()->paginate(6);

        $topik = DB::table('canvas_topics')
            ->select('name')->where('deleted_at','=', null)->get();

        $tag = DB::table('canvas_tags')
            ->select('name')->where('deleted_at','=', null)->get();

        return view('blog.blog', compact('topik', 'tag', 'posts'));
    }

    public function showPost($slug)
    {
        $siteConfig = DB::table('site_configurations')
            ->select('siteFavicon')->where('id', '=', 1)->first();

        $post = Post::with('user', 'tags', 'topic')->firstWhere('slug', $slug);
        event(new PostViewed($post));

        $latest = Post::published()->latest()->limit(3)->get();

        return view('blog.blog-detail',  compact('post', 'latest', 'siteConfig'));
    }
}
