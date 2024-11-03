<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PriceListController;

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
    return view('home');
});

Route::get('/teams', function () {
    return view('master/teams/index');
});

Route::get('/teams/addedit', function () {
    return view('master/teams/addedit');
});

Route::get('/pricelist', [PriceListController::class, 'index']);

Route::get('/pricelist/addedit/{id?}', [PriceListController::class, 'addedit'])->name('pricelist.addedit');

Route::post('/pricelist/submit', [PriceListController::class, 'submit']);

Route::get('/pricelist/delete/{id?}', [PriceListController::class, 'destroy'])->name('pricelist.delete');


Route::get('/penjualan', function () {
    return view('transaksi/penjualan/index');
});

Route::get('/penjualan/addedit', function () {
    return view('transaksi/penjualan/addedit');
});

Route::get('/laporanpenjualan', function () {
    return view('laporan/penjualan');
});

Route::get('/user', function () {
    return view('user/user');
});

Route::get('/profile', function () {
    return view('user/profile');
});
