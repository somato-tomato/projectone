<?php

namespace App\Http\Controllers;

use App\Models\SectionFeature;
use App\Models\SiteConfiguration;
use App\Models\SectionVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Image;

class SiteConfigController extends Controller
{
    public function siteConfiguration()
    {
        $siteConfig = DB::table('site_configurations')
            ->select('siteName', 'siteDescription', 'siteLogo', 'siteFavicon', 'instagram', 'facebook', 'twitter', 'alamat', 'telponSatu', 'telponDua')
            ->where('id', '=', 1)->first();

        $var_fav = 'fav-'.$siteConfig->siteLogo;

        $sectionVideo = DB::table('section_videos')
            ->select('video', 'description', 'descriptionDua')->where('id', '=', 1)->first();

        $sectionFeature = DB::table('section_features')
            ->select('sectionImage', 'sectionName', 'sectionTitle', 'sectionDescription')->get();

        return view('config.siteConfiguration', compact('siteConfig', 'sectionVideo', 'var_fav', 'sectionFeature'));
    }

    public function upSiteConfig(Request $request)
    {
        $request->validate([
            'siteName' => 'required|string',
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

        SiteConfiguration::updateOrCreate(
            ['id' => 1],
            [
                'siteName' => $request->siteName,
                'siteDescription' => $request->siteDescription,
                'siteLogo' => $new_name
            ]
        );

        Alert::success('Berhasil !', 'Situs berhasil di perbarui !');

        return back();
    }

    public function upFavicon()
    {
        $favicon = DB::table('site_configurations')
            ->select('siteLogo', 'siteFavicon')
            ->where('id', '=', 1)->first();

        if ($favicon->siteFavicon != null)
        {
            File::delete('images_site/'.$favicon->siteFavicon);
        }

        $fav_name = 'fav-'.$favicon->siteLogo;
        $filePath = public_path('/images_site');

        $img = Image::make(public_path('images_site/'.$favicon->siteLogo));
        $img->resize(32, 32, function ($const) {
            $const->aspectRatio();
        })->save($filePath.'/'.$fav_name);

        SiteConfiguration::where('id', 1)->update(['siteFavicon' => $fav_name]);

        Alert::success('Success', 'Favicon berhasil di generate !');
        return back();
    }

    public function upSocialMedia(Request $request)
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
            ['id' => 1],
            [
                'alamat' => $request->alamat,
                'telponSatu' => $request->telponSatu,
                'telponDua' => $request->telponDua,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram
            ]
        );
        Alert::success('Berhasil !', 'Situs berhasil di perbarui !');

        return back();
    }

    public function upSectionVideo(Request $request)
    {
        $request->validate([
            'video' => 'mimes:mp4,mov,ogg,webm|max:20000',
            'description' => 'required|string|max:255',
        ]);

        if ($request->video)
        {
            $file = $request->file('video');
            $slug_photo = Str::slug($file->getClientOriginalName(), '-');
            $new_name = Str::random(4).'-'.$slug_photo.'.'.$file->getClientOriginalExtension();
            $file->move(public_path('videos_site'), $new_name);
        } else {
            $new_name = 'null';
        }

        SectionVideo::updateOrCreate(
            ['id' => 1],
            [
                'video' => $new_name,
                'description' =>  $request->description,
                'descriptionDua' => $request->descriptionDua
            ]
        );

        return response()->json(['success'=>'Successfully uploaded.']);
    }

    public function sectionFeature(Request $request)
    {
        $request->validate([
            'sectionImage' => 'mimes:jpeg,png,bmp|max:300',
            'sectionName' => 'required|string|max:255',
            'sectionTitle' => 'required|string|max:255|unique:section_features',
            'sectionDescription' => 'required|string|max:255',
        ]);

        $form_data = array(
            'sectionImage' => $new_name,
            'sectionName' => $request->sectionName,
            'sectionTitle' => $request->sectionTitle,
            'sectionDescription' => $request->sectionDescription
        );

        SectionFeature::create($form_data);
        Alert::success('Sukses', 'Situs berhasil diperbarui !');
        return back();
    }
}
