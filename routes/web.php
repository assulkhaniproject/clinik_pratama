<?php

use App\Http\Controllers\Admin\DefController;
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

/**
 * Auth Routes
 * 
 */
// Route::get('/login/{kategoriUser}', 'AuthController@index')->name('login.index');
Route::get('/login', 'AuthController@index')->name('login.index');
Route::post('/login', 'AuthController@store')->name('login.store');
// Route::post('/login', 'AuthController@nipy')->name('login.nipy');
Route::get('/logout', 'AuthController@destroy')->name('login.destroy');

/**
 * Other Routes
 * 
 */
Route::get('/', function () { return view('welcome'); })->name('home');
Route::get('/profile/edit', 'Admin\DashboardController@edit')->name('edit');
Route::get('/Maintenance', 'MaintenanceController@maintenance')->name('maintenance');
Route::get('/InfoCorona19', 'CoronaController@index')->name('corona');

/**
 * Admin Routes
 * 
 */
Route::name('admin.')->prefix('admin')->middleware('CekLoginAuth')->group(function () {
    // | Dashboard | --
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/profile', 'Admin\DashboardController@profile')->name('profile');
    
    // Pasien
    Route::get('/pasien', 'Admin\PasienController@index')->name('pasien.index');
    Route::get('/pasien/create', 'Admin\PasienController@create')->name('pasien.create');
    Route::post('/pasien/store', 'Admin\PasienController@store')->name('pasien.store');
    Route::get('/pasien/detail/{id}', 'Admin\PasienController@show')->name('pasien.show');
    Route::get('/pasien/edit/{id}', 'Admin\PasienController@edit')->name('pasien.edit');
    Route::patch('/pasien/update/{id}', 'Admin\PasienController@update')->name('pasien.update');
    Route::get('/pasien/destroy/{id}', 'Admin\PasienController@destroy')->name('pasien.destroy');
    Route::get('/nipnipy/fetch/{type}', 'Admin\PasienController@loadNipNipy')->name('loadNipNipy');
    Route::get('/data-nipnipy/fetch/{uniq}/{type}', 'Admin\PasienController@loadDataNipNipy')->name('loadDataNipNipy');

    // Petugas
    Route::get('/petugas', 'Admin\PetugasController@index')->name('petugas.index');
    Route::get('/petugas/create', 'Admin\PetugasController@create')->name('petugas.create');
    Route::post('/petugas/store', 'Admin\PetugasController@store')->name('petugas.store');
    Route::get('/petugas/detail/{id}', 'Admin\PetugasController@show')->name('petugas.show');
    Route::get('/petugas/edit/{id}', 'Admin\PetugasController@edit')->name('petugas.edit');
    Route::patch('/petugas/update/{id}', 'Admin\PetugasController@update')->name('petugas.update');
    Route::get('/petugas/destroy/{id}', 'Admin\PetugasController@destroy')->name('petugas.destroy');

    // Rekam Medik
    Route::get('/rekamMedik', 'Admin\RekamMedikController@index')->name('rekamMedik.index');
    Route::get('/rekamMedik/create', 'Admin\RekamMedikController@create')->name('rekamMedik.create');
    Route::get('/rekamMedik/get-pasien/fetch', 'Admin\RekamMedikController@getPasien')->name('rekamMedik.getPasien');
    // Route::get('/rekamMedik/get-obat/fetch', 'Admin\RekamMedikController@getObat')->name('rekamMedik.getObat');
    Route::post('/rekamMedik/store', 'Admin\RekamMedikController@store')->name('rekamMedik.store');
    Route::get('/rekamMedik/detail/{id}', 'Admin\RekamMedikController@show')->name('rekamMedik.show');
    Route::get('/rekamMedik/edit/{id}', 'Admin\RekamMedikController@edit')->name('rekamMedik.edit');
    Route::patch('/rekamMedik/update/{id}', 'Admin\RekamMedikController@update')->name('rekamMedik.update');
    Route::delete('/rekamMedik/destroy/{id}', 'Admin\RekamMedikController@destroy')->name('rekamMedik.destroy');
    // Route::get('/rekamMedik/print/{rekamMedik}', 'Admin\RekamMedikController@printRekamMedik')->name('rekamMedik.print');
    Route::get('/history-rekam-medik', 'Admin\RekamMedikController@showHistory')->name('rekamMedik.showHistory');

    // Report
    Route::resource('report', 'Admin\ReportController');
    Route::resource('reportkeuangan', 'Admin\ReportKeuanganController');

    // Def Config (Seperti kepala klinik)
    Route::resource('pengaturan', 'Admin\PengaturanController');

});

/**
 * Medis Routes 
 * (Pemeriksaan bisa Dokter, Bidan, Perawat)
 * 
 */
Route::name('medis.')->prefix('medis')->middleware('CekLoginAuth')->group(function () {
    // | Dashboard | --
    Route::get('/dashboard', 'Medis\DashboardController@index')->name('dashboard');
    Route::get('/profile', 'Medis\DashboardController@profile')->name('profile');

    // Rekam Medik
    Route::resource('rekamMedik', 'Medis\RekamMedikController');
    Route::get('/rekamMedik/get-obat/fetch', 'Medis\RekamMedikController@getObat')->name('getObat');
    Route::get('/rekamMedik/get-keluhan/fetch', 'Medis\RekamMedikController@getKeluhan')->name('getKeluhan');
    Route::get('/rekamMedik/get-tindakan/fetch', 'Medis\RekamMedikController@getTindakan')->name('getTindakan');
    // Print Rekam Medik
    Route::get('/rekamMedik/print/{rekamMedik}', 'Medis\RekamMedikController@printRekamMedik')->name('rekamMedik.print');
});

/**
 * Apoteker Routes
 * 
 */
Route::name('apoteker.')->prefix('apoteker')->group(function () {
    // | Dashboard | --
    Route::get('/dashboard', 'Apoteker\DashboardController@index')->name('dashboard')->middleware('CekLoginAuth');
    Route::get('/profile', 'Apoteker\DashboardController@profile')->name('profile');

    //Rekam Medik
    Route::resource('rekamMedik', 'Apoteker\RekamMedikController');

    // Obat
    Route::get('/obat', 'Apoteker\ObatController@index')->name('obat.index');
    Route::get('/obat/create', 'Apoteker\ObatController@create')->name('obat.create');
    Route::post('/obat/store', 'Apoteker\ObatController@store')->name('obat.store');
    Route::get('/obat/edit/{id}', 'Apoteker\ObatController@edit')->name('obat.edit');
    Route::patch('/obat/update/{id}', 'Apoteker\ObatController@update')->name('obat.update');
    Route::get('/obat/destroy/{id}', 'Apoteker\ObatController@destroy')->name('obat.destroy');
});

/**
 * Kasir Routes
 * 
 */
Route::name('kasir.')->prefix('kasir')->middleware('CekLoginAuth')->group(function () {
    // | Dashboard |--
    Route::get('/dashboard', 'Kasir\DashboardController@index')->name('dashboard');
    Route::get('/profile', 'Kasir\DashboardController@profile')->name('profile');

    // Pembayaran | Report
    Route::resource('pembayaran', 'Kasir\PembayaranController')->parameter('pembayaran', 'rekamMedik');
    // Route::resource('report/kasir', 'Kasir\ReportController');
});