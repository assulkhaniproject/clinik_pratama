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

// Routes Admin
Route::group(['prefix' => 'admin'], function () {
    // Login Admin | Dashboard | --
    Route::get('/login', 'Admin\AuthAdminController@showLogin')->name('showlogin');
    Route::post('/login', 'Admin\AuthAdminController@login')->name('admin.login');
    Route::get('/logout', 'Admin\AuthAdminController@logout')->name('admin.logout');
    Route::get('/profile', 'Admin\DashboardController@profile')->name('admin.profile');
    Route::get('/profile/edit', 'Admin\DashboardController@edit')->name('admin.edit');
    Route::get('/InfoCorona19', 'CoronaController@index')->name('admin.corona');
    Route::get('/Maintenance', 'MaintenanceController@maintenance')->name('maintenance');

    // Pasien
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


    // Obat
    Route::get('/obat', 'Admin\ObatController@index')->name('obat.index')->middleware('CekLoginAuth');
    Route::get('/obat/create', 'Admin\ObatController@create')->name('obat.create')->middleware('CekLoginAuth');
    Route::post('/obat/store', 'Admin\ObatController@store')->name('obat.store')->middleware('CekLoginAuth');
    Route::get('/obat/edit/{id}', 'Admin\ObatController@edit')->name('obat.edit')->middleware('CekLoginAuth');
    Route::patch('/obat/update/{id}', 'Admin\ObatController@update')->name('obat.update')->middleware('CekLoginAuth');
    Route::get('/obat/destroy/{id}', 'Admin\ObatController@destroy')->name('obat.destroy')->middleware('CekLoginAuth');

    // Petugas
    Route::get('/petugas', 'Admin\PetugasController@index')->name('petugas.index')->middleware('CekLoginAuth');
    Route::get('/petugas/create', 'Admin\PetugasController@create')->name('petugas.create')->middleware('CekLoginAuth');
    Route::post('/petugas/store', 'Admin\PetugasController@store')->name('petugas.store')->middleware('CekLoginAuth');
    Route::get('/petugas/detail/{id}', 'Admin\PetugasController@show')->name('petugas.show')->middleware('CekLoginAuth');
    Route::get('/petugas/edit/{id}', 'Admin\PetugasController@edit')->name('petugas.edit')->middleware('CekLoginAuth');
    Route::patch('/petugas/update/{id}', 'Admin\PetugasController@update')->name('petugas.update')->middleware('CekLoginAuth');
    Route::get('/petugas/destroy/{id}', 'Admin\PetugasController@destroy')->name('petugas.destroy')->middleware('CekLoginAuth');

    Route::resource('report-admin', 'Admin\ReportController')->middleware('CekLoginAuth');
});

// Routes Kasir
Route::group(['prefix' => 'kasir'], function () {
    // Login Kasir | Dashboard |--
    Route::get('/login', 'Kasir\AuthKasirController@showLogin')->name('showlogin');
    Route::post('/login', 'Kasir\AuthKasirController@login')->name('kasir.login');
    Route::get('/logout', 'Kasir\AuthKasirController@logout')->name('kasir.logout');
    Route::get('/dashboard', 'Kasir\DashboardController@index')->name('kasir.dashboard')->middleware('CekLoginAuth');

    // Pembayaran | Report
    Route::resource('pembayaran', 'Kasir\PembayaranController')->parameter('pembayaran', 'rekamMedik')->middleware('CekLoginAuth');
    Route::resource('report/kasir', 'Kasir\ReportController')->middleware('CekLoginAuth');
});

// Routes Dokter
Route::group(['prefix' => 'dokter',], function () {
    // Login Dokter | Dashboard | --
    Route::get('/login', 'Dokter\AuthDokterController@showLogin')->name('showlogin');
    Route::post('/login', 'Dokter\AuthDokterController@login')->name('dokter.login');
    Route::get('/logout', 'Dokter\AuthDokterController@logout')->name('dokter.logout');
    Route::get('/dashboard', 'Dokter\DashboardController@index')->name('dokter.dashboard')->middleware('CekLoginAuth');

    // Rekam Medik
    Route::get('/rekamMedik', 'Admin\RekamMedikController@index')->name('rekamMedik.index')->middleware('CekLoginAuth');
    Route::get('/rekamMedik/create', 'Admin\RekamMedikController@create')->name('rekamMedik.create')->middleware('CekLoginAuth');
    Route::post('/rekamMedik/find', 'Admin\RekamMedikController@fetshautocomplete')->name('rekamMedik.find')->middleware('CekLoginAuth');
    Route::get('/rekamMedik/get-pasien/fetch', 'Admin\RekamMedikController@getPasien')->name('getPasien');
    Route::get('/rekamMedik/get-obat/fetch', 'Admin\RekamMedikController@getObat')->name('getObat');
    Route::post('/rekamMedik/store', 'Admin\RekamMedikController@store')->name('rekamMedik.store')->middleware('CekLoginAuth');
    Route::get('/rekamMedik/detail/{id}', 'Admin\RekamMedikController@show')->name('rekamMedik.show')->middleware('CekLoginAuth');
    Route::get('/rekamMedik/edit/{id}', 'Admin\RekamMedikController@edit')->name('rekamMedik.edit')->middleware('CekLoginAuth');
    Route::patch('/rekamMedik/update/{id}', 'Admin\RekamMedikController@update')->name('rekamMedik.update')->middleware('CekLoginAuth');
    Route::delete('/rekamMedik/destroy/{id}', 'Admin\RekamMedikController@destroy')->name('rekamMedik.destroy')->middleware('CekLoginAuth');
    Route::get('/rekamMedik/print/{rekamMedik}', 'Admin\RekamMedikController@printRekamMedik')->name('rekamMedik.print')->middleware('CekLoginAuth');
    
    
});

Route::group(['prefix' => 'apoteker',], function () {
    // Login Dokter | Dashboard | --
    Route::get('/login', 'Apoteker\AuthApotekerController@showLogin')->name('showlogin');
    Route::post('/login', 'Apoteker\AuthApotekerController@login')->name('apoteker.login');
    Route::get('/logout', 'Apoteker\AuthApotekerController@logout')->name('apoteker.logout');
    Route::get('/dashboard', 'Apoteker\DashboardController@index')->name('apoteker.dashboard')->middleware('CekLoginAuth');


});