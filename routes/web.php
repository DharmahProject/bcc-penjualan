<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\PriceListController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
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
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::get('/teams', [TeamController::class, 'index']);

    Route::get('/teams/addedit/{id?}', [TeamController::class, 'addedit'])->name('teams.addedit');

    // penjualan
    Route::get('/penjualan', [SalesController::class, 'index']);
    Route::get('/penjualan/addedit/{id?}', [SalesController::class, 'addedit'])->name('sales.addedit');
    Route::post('/penjualan/submit', [SalesController::class, 'submit']);

    Route::get('/laporanpenjualan', function () {
        return view('laporan/penjualan');
    });

    Route::get('/user', function () {
        return view('user/user/');
    });

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/search', [UserController::class, 'search'])->name('user.search');
    Route::get('/user/addedit/{id?}', [UserController::class, 'addedit'])->name('user.addedit');
    Route::post('/user/submit', [UserController::class, 'submit']);
    Route::get('/user/delete/{id?}', [UserController::class, 'destroy'])->name('user.delete');



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
