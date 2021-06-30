<?php

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
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', 'Admin\AuthAdminController@showLogin')->name('showlogin');
    Route::post('/login', 'Admin\AuthAdminController@login')->name('admin.login');
    Route::get('/logout', 'Admin\AuthAdminController@logout')->name('admin.logout');
    Route::get('/profile', 'Admin\DashboardController@profile')->name('admin.profile');
    Route::get('/InfoCorona19', 'CoronaController@index')->name('admin.corona');


    Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard')->middleware('CekLoginAuth');
    Route::get('/pasien', 'Admin\PasienController@index')->name('pasien.index')->middleware('CekLoginAuth');
    Route::get('/pasien/create', 'Admin\PasienController@create')->name('pasien.create')->middleware('CekLoginAuth');
    Route::post('/pasien/store', 'Admin\PasienController@store')->name('pasien.store')->middleware('CekLoginAuth');
    Route::get('/pasien/detail/{id}', 'Admin\PasienController@show')->name('pasien.show')->middleware('CekLoginAuth');
    Route::get('/pasien/edit/{id}', 'Admin\PasienController@edit')->name('pasien.edit')->middleware('CekLoginAuth');
    Route::patch('/pasien/update/{id}', 'Admin\PasienController@update')->name('pasien.update')->middleware('CekLoginAuth');
    Route::get('/pasien/destroy/{id}', 'Admin\PasienController@destroy')->name('pasien.destroy')->middleware('CekLoginAuth');

    Route::get('/nipnipy/fetch/{type}', 'Admin\PasienController@loadNipNipy')->name('loadNipNipy');
    Route::get('/data-nipnipy/fetch/{uniq}/{type}', 'Admin\PasienController@loadDataNipNipy')->name('loadDataNipNipy');

    Route::get('/obat', 'Admin\ObatController@index')->name('obat.index')->middleware('CekLoginAuth');
    Route::get('/obat/create', 'Admin\ObatController@create')->name('obat.create')->middleware('CekLoginAuth');
    Route::post('/obat/store', 'Admin\ObatController@store')->name('obat.store')->middleware('CekLoginAuth');
    Route::get('/obat/edit/{id}', 'Admin\ObatController@edit')->name('obat.edit')->middleware('CekLoginAuth');
    Route::patch('/obat/update/{id}', 'Admin\ObatController@update')->name('obat.update')->middleware('CekLoginAuth');
    Route::get('/obat/destroy/{id}', 'Admin\ObatController@destroy')->name('obat.destroy')->middleware('CekLoginAuth');

    Route::get('/rekamMedik', 'Admin\RekamMedikController@index')->name('rekamMedik.index')->middleware('CekLoginAuth');
    Route::get('/rekamMedik/create', 'Admin\RekamMedikController@create')->name('rekamMedik.create')->middleware('CekLoginAuth');
    Route::post('/rekamMedik/find', 'Admin\RekamMedikController@fetshautocomplete')->name('rekamMedik.find')->middleware('CekLoginAuth');
    Route::get('/rekamMedik/get-pasien/fetch', 'Admin\RekamMedikController@getPasien')->name('getPasien');
    Route::post('/rekamMedik/store', 'Admin\RekamMedikController@store')->name('rekamMedik.store')->middleware('CekLoginAuth');
    Route::get('/rekamMedik/detail/{id}', 'Admin\RekamMedikController@show')->name('rekamMedik.show')->middleware('CekLoginAuth');

    Route::get('/report', 'Admin\ReportController@index')->name('report.index')->middleware('CekLoginAuth');
});

Route::group(['prefix' => 'kasir'], function () {

    Route::get('/login', 'Kasir\AuthKasirController@showLogin')->name('showlogin');
    Route::post('/login', 'Kasir\AuthKasirController@login')->name('kasir.login');
    Route::get('/logout', 'Kasir\AuthKasirController@logout')->name('kasir.logout');

    Route::get('/dashboard', 'Kasir\DashboardController@index')->name('kasir.dashboard')->middleware('CekLoginAuth');
    Route::get('/pembayaran', 'Kasir\DashboardController@index')->name('kasir.pembayaran')->middleware('CekLoginAuth');
    Route::get('/report', 'Kasir\DashboardController@index')->name('kasir.report')->middleware('CekLoginAuth');

});
