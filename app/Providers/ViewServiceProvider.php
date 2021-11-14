<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //Site Configuration
        View::composer(['front.head', 'front.footer', 'front.header', 'front.navBlog'], function ($view){
            $siteConfig = DB::table('site_configurations')
                ->select('siteName', 'siteDescription', 'siteLogo', 'siteFavicon', 'alamat', 'telponSatu', 'telponDua', 'instagram', 'youtube', 'facebook', 'email')
                ->where('id', '=', 1)
                ->first();
            $view->with('siteConfig', $siteConfig);
        });
    }
}
