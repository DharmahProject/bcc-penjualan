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
    return view('master/teams/index');
});

Route::get('/teams/addedit', function () {
    return view('master/teams/addedit');
});

Route::get('/pricelist', function () {
    return view('master/pricelist/index');
});

Route::get('/pricelist/addedit', function () {
    return view('master/pricelist/addedit');
});


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
