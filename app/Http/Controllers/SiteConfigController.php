<?php

namespace App\Http\Controllers;

use App\Models\SectionFeature;
use App\Models\SectionProcess;
use App\Models\SiteConfiguration;
use App\Models\SectionVideo;
use App\Models\Testimony;
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
            ->select('siteName', 'siteDescription', 'siteLogo', 'siteFavicon', 'instagram', 'facebook', 'youtube', 'alamat', 'telponSatu', 'telponDua', 'email')
            ->where('id', '=', 1)->first();

        $var_fav = 'fav-'.$siteConfig->siteLogo;

        $sectionVideo = DB::table('section_videos')
            ->select('video', 'description', 'descriptionDua')->where('id', '=', 1)->first();

        $sectionFeature = DB::table('section_features')
            ->select('sectionImage', 'sectionName', 'sectionTitle', 'sectionDescription', 'id', 'buttonDestination')->get();

        $sectionProcess = DB::table('section_processes')
            ->select('number', 'processName', 'processDesc')->get();

        return view('config.siteConfiguration', compact('siteConfig', 'sectionVideo', 'var_fav', 'sectionFeature', 'sectionProcess'));
    }

    public function testimony()
    {
        $testi = DB::table('testimonies')->paginate(3);

        return view('config.testimoni', compact('testi'));
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
            'youtube' => $request->youtube,
            'instagram' => $request->instagram
        );

        SiteConfiguration::updateOrCreate(
            ['id' => 1],
            [
                'alamat' => $request->alamat,
                'telponSatu' => $request->telponSatu,
                'telponDua' => $request->telponDua,
                'facebook' => $request->facebook,
                'youtube' => $request->youtube,
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
            'sectionImage' => 'required|mimes:jpeg,png,bmp|max:500',
            'sectionName' => 'required|string|max:255',
            'sectionTitle' => 'required|string|max:255|unique:section_features',
            'sectionDescription' => 'required|string',
        ]);

        $file = $request->file('sectionImage');
        $slug_photo = Str::slug($file->getClientOriginalName(), '-');
        $new_name = Str::random(4).'-'.$slug_photo.'.'.$file->getClientOriginalExtension();
        $file->move(public_path('images_site'), $new_name);

        $form_data = array(
            'sectionImage' => $new_name,
            'sectionName' => $request->sectionName,
            'sectionTitle' => $request->sectionTitle,
            'sectionDescription' => $request->sectionDescription,
            'buttonName' => $request->buttonName,
            'buttonDestination' => $request->buttonDestination
        );

        SectionFeature::create($form_data);
        Alert::success('Sukses', 'Situs berhasil diperbarui !');
        return back();
    }

    public function deleteSectionFeature($id)
    {
        $id = SectionFeature::find($id);
        File::delete('images_site/'.$id->sectionImage);
        $id->delete();

        return response()->json([
            'success' => 'Record has been deleted successfully!'
        ]);
    }

    public function upProcess(Request $request)
    {
        SectionProcess::where('number', $request->number)->update(
            ['processName' => $request->processName, 'processDesc' => $request->processDesc]
        );

        Alert::success('Berhasil', 'Situs berhasil di perbarui !');
        return back();
    }

    public function addTestimony(Request $request)
    {
        $request->validate([
            'testimony' => 'required|string',
            'name' => 'required|string',
            'occupation' => 'required|string',
            'photo' => 'required|mimes:jpeg,png,bmp|max:500'
        ]);

        $file = $request->file('photo');
        $slug_photo = Str::slug($file->getClientOriginalName(), '-');
        $new_name = Str::random(4).'-'.$slug_photo.'.'.$file->getClientOriginalExtension();
        $file->move(public_path('images_site'), $new_name);

        $form_data = array(
            'photo' => $new_name,
            'name' => $request->name,
            'occupation' => $request->occupation,
            'testimony' => $request->testimony
        );

        Testimony::create($form_data);

        Alert::success('Berhasil', 'Situs berhasil di perbarui !');
        return back();
    }

    public function deleteTestimony($id)
    {
        $id = Testimony::find($id);
        File::delete('images_site/'.$id->photo);
        $id->delete();

        return response()->json([
            'success' => 'Record has been deleted successfully!'
        ]);
    }

}
