<?php

use App\Http\Controllers\CasirController;
use App\Http\Controllers\WaiterController;
use App\Http\Controllers\KitchenController;
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
    return view('layouts.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/logout', function()
{
    auth()->logout();
    session()->flush();
    return Redirect::to('/');
})->name('keluar');


Route::resource('/casir/dashboard',CasirController::class)->except('show')->middleware('casir');
Route::resource('/waiter/dashboard',WaiterController::class)->except('show')->middleware('waiter');
Route::get('/pemesanan/tambah','App\Http\Controllers\PesananController@create');
Route::patch('/pesan','App\Http\Controllers\PesananController@store');
Route::get('/pemesanan/status', [App\Http\Controllers\StatusController::class, 'index'])->middleware('waiter');
Route::resource('/kitchen/dashboard',KitchenController::class)->except('show')->middleware('kitchen');
Route::resource('/casir/help',CasirController::class)->except('show')->middleware('casir');
Route::resource('/kitchen/help',CasirController::class)->except('show')->middleware('kitchen');
Route::resource('/waiter/help',CasirController::class)->except('show')->middleware('waiter');
Route::get('/casir/worker',[App\Http\Controllers\WorkerController::class, 'index'])->name('worker')->middleware('casir');
Route::get('/casir/add','App\Http\Controllers\WorkerController@create');
Route::patch('/casir/worker','App\Http\Controllers\WorkerController@store');
Route::delete('worker/tes/{id}','App\Http\Controllers\WorkerController@destroy');
Route::delete('food/tes/{id}','App\Http\Controllers\CasirController@destroyfood');
Route::delete('drink/tes/{id}','App\Http\Controllers\CasirController@destroydrink');
Route::get('/riwayat',[App\Http\Controllers\CasirController::class, 'deleteAll'])->name('riwayat');
Route::get('waiter/edit','App\Http\Controllers\WorkerController@edit');
Route::patch('/waiter/{id}','App\Http\Controllers\WorkerController@update');
Route::patch('/pesan/{id}/food','App\Http\Controllers\KitchenController@updatestatusfood');
Route::patch('/pesan/{id}/drink','App\Http\Controllers\KitchenController@updatestatusdrink');
Route::get('/kitchen/menumakanan', [App\Http\Controllers\KitchenController::class,'menumakanan'])->name('menumakanan')->middleware('kitchen');
Route::get('/kitchen/menuminuman', [App\Http\Controllers\KitchenController::class,'menuminuman'])->name('menuminuman')->middleware('kitchen');
Route::get('/kitchen/addfood','App\Http\Controllers\KitchenController@createfood');
Route::get('/kitchen/adddrink','App\Http\Controllers\KitchenController@createdrink');
Route::patch('/kitchen/menumakanan','App\Http\Controllers\KitchenController@storefood');
Route::patch('/kitchen/menuminuman','App\Http\Controllers\KitchenController@storedrink');
Route::get('/casir/cetakstruk',[App\Http\Controllers\CasirController::class, 'cetak'])->name('cetakstruk');
Route::get('/casir/cetakform',[App\Http\Controllers\CasirController::class, 'cetakform'])->name('cetakform');
Route::get('/casir/panduan',[App\Http\Controllers\CasirController::class, 'panduan'])->name('panduan');
Route::get('/casir/riwayatpesanan',[App\Http\Controllers\CasirController::class, 'riwayat'])->name('riwayat');
Route::get('/waiters/panduan',[App\Http\Controllers\WaiterController::class, 'panduan'])->name('panduan');
Route::get('/kitchen/panduan',[App\Http\Controllers\KitchenController::class, 'panduan'])->name('panduan');
Route::get('/casir/cetakpesanan/{meja}',[App\Http\Controllers\CasirController::class, 'cetakpesanan'])->name('cetakpesanan');
Route::get('/foods/{id}','App\Http\Controllers\KitchenController@editfood');
Route::patch('/food/{id}','App\Http\Controllers\KitchenController@updatefood');
Route::get('/drinks/{id}','App\Http\Controllers\KitchenController@editdrink');
Route::patch('/drink/{id}','App\Http\Controllers\KitchenController@updatedrink');
Route::delete('food/{id}','App\Http\Controllers\KitchenController@destroyfood');
Route::delete('drink/{id}','App\Http\Controllers\KitchenController@destroydrink');

Route::get('/panduan/transaksi', function () {
    return view('casir.panduan.transaksi');
});

Route::get('/panduan/pekerja', function () {
    return view('casir.panduan.pekerja');
});

Route::get('/panduan/profil', function () {
    return view('casir.panduan.profil');
});
Route::get('/panduan/pesanan', function () {
    return view('waiters.panduan.pesanan');
});

Route::get('/panduan/profil', function () {
    return view('waiters.panduan.profil');
});

Route::get('/panduan/status', function () {
    return view('waiters.panduan.status');
});
Route::get('/panduan/statuss', function () {
    return view('kitchens.panduan.status');
});

Route::get('/panduan/menu', function () {
    return view('kitchens.panduan.menu');
});

Route::get('/panduan/profils', function () {
    return view('kitchens.panduan.profil');
});

Route::get('profile', 'App\Http\Controllers\ProfileController@edit')->name('profile.edit'); 
Route::patch('profile', 'App\Http\Controllers\ProfileController@update') ->name('profile.update'); 
Route::get('/tampilprofile',[App\Http\Controllers\ProfileController::class, 'index'])->name('tampilprofile');

Route::post('/tampilprofile', 'App\Http\Controllers\ProfileController@update_avatar');
