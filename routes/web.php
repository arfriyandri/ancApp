<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;
use App\Http\Controllers\authController;
use App\Http\Controllers\adminController;
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
Route::get('/home',[authController::class, 'logout']) -> name('home');
Route::get('/logout',[authController::class, 'logout']);

Route::middleware(['guest']) -> group(
    function(){
        Route::get('/',[index::class, 'index']) -> name('index');

        Route::controller(authController::class) -> group(
            function(){
                Route::get('/login', 'login') -> name('login');
                Route::post('/loginProcess', 'loginProcess') -> name('loginProcess');
                Route::get('/verifikasi', 'verifikasi') -> name('verifikasi');
            }
        );
    }
);

Route::middleware(['auth']) -> group(
    function(){
        Route::get('/admin',[adminController::class, 'index']) -> name('index');
        Route::get('/admin/bidan',[adminController::class, 'showBidan']) -> name('showBidan');
        Route::get('/admin/pasien',[adminController::class, 'showPasien']) -> name('showPasien');
        Route::get('/admin/materi',[adminController::class, 'showMateri']) -> name('showMateri');
    }
);

