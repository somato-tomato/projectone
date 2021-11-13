<?php

use App\Http\Controllers\SiteConfigController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PortofolioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('onepage');
});
Route::get('/',[LayoutController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(["middleware" => ['auth:sanctum', 'verified']], function () {

    Route::resource('team', TeamController::class);
    Route::resource('portofolio', PortofolioController::class);

    Route::post('/pengautran-situs/simpan-fitur', [SiteConfigController::class, 'sectionFeature'])->name('site.sf');
    Route::post('/pengaturan-situs/simpan-video', [SiteConfigController::class, 'upSectionVideo'])->name('site.usv');
    Route::post('/pengaturan-situs/simpan-sosmed', [SiteConfigController::class, 'upSocialMedia'])->name('site.usm');
    Route::post('/pengaturan-situs/simpan-favicon', [SiteConfigController::class, 'upFavicon'])->name('site.uf');
    Route::post('/pengaturan-situs/simpan-konfigurasi', [SiteConfigController::class, 'upSiteConfig'])->name('site.usc');
    Route::get('/pengaturan-situs', [SiteConfigController::class, 'siteConfiguration'])->name('site.sc');
});

require __DIR__.'/auth.php';
