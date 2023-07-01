<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilesController;
use App\Http\Controllers\CuentasController;
use App\Http\Controllers\ImagenesController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/login',[HomeController::class,'login'])->name('home.login');
Route::resource('/', HomeController::class);

Route::post('/cuentas/autenticar',[CuentasController::class,'autenticar'])->name('cuentas.login');
Route::get('/cuentas/logout',[CuentasController::class,'logout'])->name('cuentas.logout');
Route::post('/cuentas',[CuentasController::class,'store'])->name('cuentas.store');
Route::get('/cuentas/{cuenta}',[CuentasController::class,'show'])->name('cuentas.show');
Route::get('/',[CuentasController::class,'index'])->name('cuentas.index');
Route::get('/cuentas/{cuenta}/edit',[CuentasController::class,'edit'])->name('cuentas.edit');
Route::put('/cuentas/{cuenta}',[CuentasController::class,'update'])->name('cuentas.update');
Route::delete('/cuentas/{cuenta}',[CuentasController::class,'destroy'])->name('cuentas.destroy');
Route::resource('/cuentas',CuentasController::class);
