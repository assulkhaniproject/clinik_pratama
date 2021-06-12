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

    Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard')->middleware('CekLoginAuth');
    Route::get('/pasien', 'Admin\PasienController@index')->name('pasien.index')->middleware('CekLoginAuth');
    Route::get('/pasien/create', 'Admin\PasienController@create')->name('pasien.create')->middleware('CekLoginAuth');
    Route::post('/pasien/store', 'Admin\PasienController@store')->name('pasien.store')->middleware('CekLoginAuth');
    Route::get('/pasien/detail/{id}', 'Admin\PasienController@show')->name('pasien.show')->middleware('CekLoginAuth');
    Route::get('/pasien/edit/{id}', 'Admin\PasienController@edit')->name('pasien.edit')->middleware('CekLoginAuth');
    Route::patch('/pasien/update/{id}', 'Admin\PasienController@update')->name('pasien.update')->middleware('CekLoginAuth');
    Route::get('/pasien/destroy/{id}', 'Admin\PasienController@destroy')->name('pasien.destroy')->middleware('CekLoginAuth');

    Route::get('/obat', 'Admin\ObatController@index')->name('obat.index')->middleware('CekLoginAuth');
    Route::get('/obat/create', 'Admin\ObatController@create')->name('obat.create')->middleware('CekLoginAuth');
    Route::post('/obat/store', 'Admin\ObatController@store')->name('obat.store')->middleware('CekLoginAuth');
    Route::get('/obat/edit/{id}', 'Admin\ObatController@edit')->name('obat.edit')->middleware('CekLoginAuth');
    Route::patch('/obat/update/{id}', 'Admin\ObatController@update')->name('obat.update')->middleware('CekLoginAuth');
    Route::get('/obat/destroy/{id}', 'Admin\ObatController@destroy')->name('obat.destroy')->middleware('CekLoginAuth');

    Route::get('/rekamMedik', 'Admin\RekamMedikController@index')->name('rekamMedik.index')->middleware('CekLoginAuth');
});
