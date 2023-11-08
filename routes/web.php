<?php


use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\NumberController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PosterController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\PagesController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/artisan/{name}', function ($name) {
    \Artisan::call($name);
    return 'OK';
});

Route::auto('/', PagesController::class);

Route::get('lang/{lang}', function($lang){
    session(['lang'=>$lang]);
    return back();
});

Route::prefix('admin/')->name('admin.')->middleware('auth')->group(function(){

    Route::get('/dashboard', function(){ return view('admin.layouts.dashboard'); });
    Route::resource('orders', OrderController::class)->only('index', 'show', 'destroy');
    Route::resources([
        'teams' => TeamController::class,
        'posters' => PosterController::class,      
        'news' => NewsController::class,
        'galleries' => GalleryController::class,
        'videos' => VideoController::class,
        'services' => ServiceController::class,
    ]);

    Route::get('numbers/{id}', [NumberController::class, 'index'])->name('numbers');
    Route::put('numbers/update/{id}', [NumberController::class, 'update'])->name('numbers.update');

});

require __DIR__.'/auth.php';
