<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteConfigController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\PackageController;
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

Route::get('/te',[HomeController::class,'home'])->name('h');
Route::get('/onepage',[HomeController::class,'home'])->name('h');
Route::get('/', function (){
    return view('onepage');
});
Route::get('/blog', [BlogController::class, 'listPost'])->name('lp');
Route::get('/blog/{slug}', [BlogController::class, 'showPost'])->name('sp');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(["middleware" => ['auth:sanctum', 'verified']], function () {

    Route::resource('team', TeamController::class);
    Route::resource('portofolio', PortofolioController::class);
    Route::resource('package', PackageController::class);

    Route::delete('/testimoni/hapus/{id}/testimoni', [SiteConfigController::class, 'deleteTestimony'])->name('site.dt');
    Route::post('/testimoni/simpan-testimoni', [SiteConfigController::class, 'addTestimony'])->name('site.at');
    Route::get('/testimoni', [SiteConfigController::class, 'testimony'])->name('site.t');

    Route::post('/pengaturan-situs/perbarui-proses', [SiteConfigController::class, 'upProcess'])->name('site.up');
    Route::delete('/pengaturan-situs/hapus/{id}/fitur', [SiteConfigController::class, 'deleteSectionFeature'])->name('site.dsf');
    Route::post('/pengautran-situs/simpan-fitur', [SiteConfigController::class, 'sectionFeature'])->name('site.sf');
    Route::post('/pengaturan-situs/simpan-video', [SiteConfigController::class, 'upSectionVideo'])->name('site.usv');
    Route::post('/pengaturan-situs/simpan-sosmed', [SiteConfigController::class, 'upSocialMedia'])->name('site.usm');
    Route::post('/pengaturan-situs/simpan-favicon', [SiteConfigController::class, 'upFavicon'])->name('site.uf');
    Route::post('/pengaturan-situs/simpan-konfigurasi', [SiteConfigController::class, 'upSiteConfig'])->name('site.usc');
    Route::get('/pengaturan-situs', [SiteConfigController::class, 'siteConfiguration'])->name('site.sc');
});

require __DIR__.'/auth.php';
