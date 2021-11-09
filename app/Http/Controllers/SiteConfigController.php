<?php

namespace App\Http\Controllers;

use App\Models\SiteConfiguration;
use App\Models\SectionVideo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class SiteConfigController extends Controller
{
    public function siteConfiguration()
    {
        $siteConfig = DB::table('site_configurations')
            ->select('siteName', 'siteDescription', 'siteLogo', 'siteFavicon', 'instagram', 'facebook', 'twitter', 'alamat', 'telponSatu', 'telponDua')
            ->where('id', '=', 1)->first();

        $sectionVideo = DB::table('section_videos')
            ->select('video', 'description')->where('id', '=', 1)->first();

        return view('config.siteConfiguration', compact('siteConfig', 'sectionVideo'));
    }

    public function upSiteConfig(Request $request)
    {
        $request->validate([
            'siteName' => 'require|string',
            'siteDescription' => 'string|max:255',
            'siteLogo' => 'mimes:jpeg,png,bmp|max:512',
        ]);

        if ($request->siteLogo)
        {
            $file = $request->file('siteLogo');
            $slug_photo = Str::slug($file->getClientOriginalName(), '-');
            $new_name = Str::random(4).'-'.$slug_photo.'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images_site'), $new_name);
        } else {
            $new_name = 'NULL';
        }
        
        $form_data = array(
            'siteName' => $request->siteName,
            'siteDescription' => $request->siteDescription,
            'siteLogo' => $new_name
        );

        SiteConfiguration::updateOrCreate(
            ['id', 1],
            [$form_data]
        );
        Alert::success('Berhasil !', 'Situs berhasil di perbarui !');

        return back();
    }

    public function upFavicon(Request $request)
    {
        $request->validate([
            'siteFavicon' => 'mimes:png,jpg|max:100'
        ]);

        $file = $request->file('siteFavicon');
        $slug_photo = Str::slug($file->getClientOriginalName(), '-');
        $new_name = Str::random(4).'-'.$slug_photo.'.'.$file->getClientOriginalExtension();
        $file->move(public_path('images_site'), $new_name);
    
        SiteConfiguration::updateOrCreate(
            ['id', 1],
            ['siteFavicon' => $new_name]
        );
        Alert::success('Berhasil !', 'Situs berhasil di perbarui !');

        return back();
    }

    public function upSocialMedia()
    {
        $form_data = array(
            'alamat' => $request->alamat,
            'telponSatu' => $request->telponSatu,
            'telponDua' => $request->telponDua,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram
        );

        SiteConfiguration::updateOrCreate(
            ['id', 1],
            [$form_data]
        );
        Alert::success('Berhasil !', 'Situs berhasil di perbarui !');

        return back();
    }

    public function upSectionVideo(Request $request)
    {
        $request->validate([
            'video' => 'mimes:mp4,mov,ogg | max:20000',
            'description' => 'require|string|max:255',
        ]);

        $file = $request->file('video');
        $slug_photo = Str::slug($file->getClientOriginalName(), '-');
        $new_name = Str::random(4).'-'.$slug_photo.'.'.$file->getClientOriginalExtension();
        $file->move(public_path('videos_site'), $new_name);
    
        $form_data = array(
            'video' => $new_name,
            'description' => $request->descripton
        );

        SectionVideo::updateOrCreate(
            ['id', 1],
            [$form_data]
        );
        Alert::success('Berhasil !', 'Situs berhasil di perbarui !');

        return back();
    }
}
