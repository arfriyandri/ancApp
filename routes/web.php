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
        Route::prefix('/admin') -> group(
            function(){
                Route::get('/',[adminController::class, 'index']) -> name('admin.index');
                Route::get('/logout',[authController::class, 'logout']);

                Route::prefix('/bidan') -> group(
                    function(){
                        Route::get('/',[bidanController::class, 'index']) -> name('bidan.index');
                        Route::get('create',[bidanController::class, 'create']) -> name('bidan.create');
                        Route::post('/',[bidanController::class, 'store']) -> name('bidan.store');
                        Route::get('{id}/edit',[bidanController::class, 'edit']) -> name('bidan.edit');
                        Route::put('{id}',[bidanController::class, 'update']) -> name('bidan.update');
                        Route::delete('{id}',[bidanController::class, 'destroy']) -> name('bidan.destroy');
                    }
                );

                Route::prefix('/pasien') -> group(
                    function(){
                        Route::get('/',[pasienController::class, 'index']) -> name('pasien.index');
                        Route::get('/{id}/rekamMedisPasien',[adminController::class, 'indexRekam']) -> name('rekamMedis.index');
                    }
                );

                Route::prefix('/materi') -> group(
                    function(){
                        Route::get('/',[materiController::class,'index']) -> name('materi.index');
                        Route::get('create',[materiController::class,'create']) -> name('materi.create');
                        Route::post('/',[materiController::class, 'store']) -> name('materi.store');
                        Route::get('{id}/edit',[materiController::class, 'edit']) -> name('materi.edit');
                        Route::put('{id}',[materiController::class, 'update']) -> name('materi.update');
                        Route::delete('{id}',[materiController::class, 'destroy']) -> name('materi.destroy');
                    }
                );
            }
        );
    }
);

Route::middleware(['bidan']) -> group(
    function(){

        Route::prefix('/bidan') -> group(
            function(){
                Route::prefix('/pasien') -> group(
                    function(){
                        Route::get('/',[pasienController::class, 'indexBidan']) -> name('pasien.index');
                        Route::get('create',[pasienController::class, 'create']) -> name('pasien.create');
                        Route::post('/',[pasienController::class, 'store']) -> name('pasien.store');
                        Route::get('{id}/edit',[pasienController::class, 'edit']) -> name('pasien.edit');
                        Route::put('{id}',[pasienController::class, 'update']) -> name('pasien.update');
                        Route::delete('{id}',[pasienController::class, 'destroy']) -> name('pasien.destroy');


                        Route::prefix('/{id}/rekamMedisPasien') -> group(
                            function(){
                                Route::get('/',[rekamMedisPasienController::class, 'indexRekam']) -> name('rekamMedis.index');
                                Route::get('create',[rekamMedisPasienController::class, 'create']) -> name('rekamMedis.create');
                                Route::post('/',[rekamMedisPasienController::class, 'store']) -> name('rekamMedis.store');
                                Route::get('{id_rekamMedis}/edit',[rekamMedisPasienController::class, 'edit']) -> name('rekamMedis.edit');
                                Route::put('{id_rekamMedis}',[rekamMedisPasienController::class, 'update']) -> name('rekamMedis.update');
                                Route::delete('{id_rekamMedis}',[rekamMedisPasienController::class, 'destroy']) -> name('rekamMedis.destroy');
                            }
                        );

                        Route::prefix('/{id}/jadwalPasien') -> group(
                            function(){
                                Route::get('create',[jadwalPasienController::class, 'create']) -> name('jadwal.create');
                                Route::post('/',[jadwalPasienController::class, 'store']) -> name('jadwal.store');
                                Route::get('{id_jadwal}/edit',[jadwalPasienController::class, 'edit']) -> name('jadwal.edit');
                                Route::put('{id_jadwal}',[jadwalPasienController::class, 'update']) -> name('rekamMedis.update');
                                Route::delete('{id_jadwal}',[jadwalPasienController::class, 'destroy']) -> name('jadwal.destroy');
                            }
                        );
                    }
                );

                Route::prefix('/materi') -> group(
                    function(){
                        Route::get('/',[materiController::class, 'indexMateri']) -> name('materiBidan.index');
                        // Route::get('create',[pasienController::class, 'create']) -> name('pasien.create');
                        // Route::post('/',[pasienController::class, 'store']) -> name('pasien.store');
                        // Route::get('{id}/edit',[pasienController::class, 'edit']) -> name('pasien.edit');
                        // Route::put('{id}',[pasienController::class, 'update']) -> name('pasien.update');
                        // Route::delete('{id}',[pasienController::class, 'destroy']) -> name('pasien.destroy');
                    }
                );
                Route::get('/logout',[authController::class, 'logout']);
            }
        );

    }
);

Route::middleware(['pasien']) -> group(
    function (){
        Route::prefix('/pasien') -> group(
            function (){
                Route::get('/', [pasienController::class, 'indexPasien']) -> name('pasien.index');
            }
        );
    }
);

