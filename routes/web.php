<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\RaporController;
use App\Http\Controllers\RaporSiswaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UbahPasswordController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

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
    return (redirect()->intended('login'));
});



Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');


Route::group(['middleware' => ['auth', 'cekAdmin'], 'prefix' => 'admin'], function(){
    Route::get('dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::resource('siswa', SiswaController::class);
    Route::resource('mapel', MapelController::class);
    Route::resource('rapor', RaporController::class);
    Route::resource('rapor-siswa', RaporSiswaController::class);
    Route::get('rapor-siswa/{mapelId}/{siswaId}', [
        'as' => 'rapor-siswa.destroy',
        'uses' => 'App\Http\Controllers\RaporSiswaController@destroy',
    ]);

    Route::put('rapor-siswa/{mapelId}/{siswaId}', [
        'as' => 'rapor-siswa.update',
        'uses' => 'App\Http\Controllers\RaporSiswaController@update',

    ]);

});

Route::group(['middleware' => ['auth','cekUser'], 'prefix' => 'user'], function(){
    Route::get('dashboard', 'App\Http\Controllers\DashboardUserController@index')->name('dashboard');
    Route::get('rapor', 'App\Http\Controllers\LihatRaporController@index')->name('lihat-rapor');
    Route::resource('ubah-password', UbahPasswordController::class);
});
