<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ChangePasswordController;
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'home']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/teams', function () {
        return view('master/teams/index');
    });

    Route::get('/teams/addedit', function () {
        return view('master/teams/addedit');
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

    Route::get('/pricelist', [PriceListController::class, 'index']);

    Route::get('/pricelist/addedit/{id?}', [PriceListController::class, 'addedit'])->name('pricelist.addedit');

    Route::post('/pricelist/submit', [PriceListController::class, 'submit']);

    Route::get('/pricelist/delete/{id?}', [PriceListController::class, 'destroy'])->name('pricelist.delete');

    Route::get('/logout', [SessionsController::class, 'destroy']);
    Route::get('/login', function () {
        return view('dashboard');
    })->name('sign-up');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
    Route::get('/login/forgot-password', [ResetController::class, 'create']);
    Route::post('/forgot-password', [ResetController::class, 'resetPass']);
    Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
    Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});


Route::get('/login', function () {
    return view('session/loginSession');
})->name('login');
