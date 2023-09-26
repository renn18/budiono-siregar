<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KapalController;
use App\Http\Controllers\KeperluanController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SempakController;

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

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    // Route Dashboard after login
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'dashboard'], function () {
        // Route for Kapal pages
        Route::resource('kapal', KapalController::class);

        // Route for detail of kapal
        Route::resource('details', DetailController::class)->except(['destroy']);

        // Route for penjadwalan of kapal
        Route::resource('schedules', ScheduleController::class)->except(['destroy']);

        Route::get('rekapitulasi-data', [KapalController::class, 'recapitulation'])->name('rekapitulasi.index');
    });

    Route::redirect('/tambah-akun', 'register')->name('register');

    // Route if page not found
    Route::fallback(function () {
        return view('pages/utility/404');
    });
});
