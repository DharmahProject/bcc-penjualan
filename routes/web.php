<?php

use Illuminate\Support\Facades\Route;

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
    return view('master/teams');
});

Route::get('/pricelist', function () {
    return view('master/pricelist');
});

Route::get('/penjualan', function () {
    return view('transaksi/penjualan');
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
