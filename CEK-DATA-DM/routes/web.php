<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'BlogController@home');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/mastercif', 'BlogController@mastercif')->name('mastercif');;
Route::get('/tambahancif', 'BlogController@tambahancif');

Route::get('/jalinan','BlogController@klaimJalinan');
Route::get('/jalinan/import','MutasiSimpananController@show')->name('importjalinan');
Route::post('/jalinan/import','MutasiSimpananController@Store');

Route::get('/jalinan/laporan','MutasiSimpananController@laporanJalinan');

Route::get('/mastercif/import','cifimportController@show')->name('importmastercif');
Route::post('/mastercif/import','cifimportController@Store');
Route::get('/mastercif/cekdata', 'cifimportController@Cekcif')->name('Cekcif'); 
Route::post('/mastercif/cekdata','cifimportController@Cekdata')->name('cekdata');

Auth::routes();