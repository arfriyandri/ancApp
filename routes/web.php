<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\authController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\bidanController;
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

Route::middleware(['guest'])->group(function () {
    // Rute untuk pengguna yang tidak terotentikasi
    Route::get('/', [IndexController::class, 'index'])->name('index');

    // Rute untuk otentikasi
    Route::prefix('auth')->group(function () {
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/loginProcess', [AuthController::class, 'loginProcess'])->name('loginProcess');
    });
});

Route::middleware(['admin']) -> group(
    function(){
        Route::get('/admin',[adminController::class, 'index']) -> name('admin.index');

        Route::prefix('/admin/bidan/') -> group(
            function(){
                Route::get(' ',[bidanController::class, 'index']) -> name('bidan.index');
                Route::get('create',[bidanController::class, 'create']) -> name('bidan.create');
                Route::post(' ',[bidanController::class, 'store']) -> name('bidan.store');
                Route::get('{id}edit',[bidanController::class, 'edit']) -> name('bidan.edit');
                Route::put('{id}',[bidanController::class, 'update']) -> name('bidan.update');
                Route::delete('{id}',[bidanController::class, 'destroy']) -> name('bidan.destroy');
            });

        Route::get('/admin/pasien',[adminController::class, 'showPasien']) -> name('showPasien');
        Route::get('/admin/materi',[adminController::class, 'showMateri']) -> name('showMateri');

        Route::get('/admin/logout',[authController::class, 'logout']);
    }
);

Route::middleware(['bidan']) -> group(
    function(){
        // dd('bidan');
    }
);

