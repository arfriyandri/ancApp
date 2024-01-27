<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\authController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\bidanController;
use App\Http\Controllers\pasienController;
use App\Http\Controllers\rekamMedisPasienController;
use App\Http\Controllers\jadwalPasienController;
use App\Http\Controllers\materiController;

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

        Route::prefix('/admin/bidan') -> group(
            function(){
                Route::get('/',[bidanController::class, 'index']) -> name('bidan.index');
                Route::get('create',[bidanController::class, 'create']) -> name('bidan.create');
                Route::post('/',[bidanController::class, 'store']) -> name('bidan.store');
                Route::get('{id}edit',[bidanController::class, 'edit']) -> name('bidan.edit');
                Route::put('{id}',[bidanController::class, 'update']) -> name('bidan.update');
                Route::delete('{id}',[bidanController::class, 'destroy']) -> name('bidan.destroy');
            });

        Route::prefix('/admin/pasien') -> group(
            function(){
                Route::get('/',[pasienController::class, 'index']) -> name('pasien.index');
                Route::get('/{id}/rekamMedisPasien',[adminController::class, 'rekam.index']) -> name('rekamMedis.index');
            }
        );

        Route::prefix('/admin/materi') -> group(
            function(){
                Route::get('/',[materiController::class,'index']) -> name('materi.index');
            }
        );
    }
);

Route::middleware(['bidan']) -> group(
    function(){
        // dd('bidan');
    }
);

