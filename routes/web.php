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
    return view('index');
});
Route::resource('form', 'RegisFormController');
Route::resource('belajar', 'BelajarController');
Route::resource('maklumat', 'MaklumatPelayananController');
Route::resource('tutor', 'TutorAdminController');
Route::resource('zona', 'ZonaIntergritasController');
Route::resource('latar_belakang', 'LatarBelakangController');
Route::resource('kegiatan_diklat', 'KegiatanDiklatController');
Route::resource('pilihan_diklat', 'PilihanDiklatController');
Route::resource('sertifikasi', 'SertifikasiController');
Route::resource('tujuan', 'TujuanController');
Route::get('datastore', 'RegisFormController@store');

