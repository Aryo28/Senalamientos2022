<?php

use App\Http\Controllers\ClasificacionController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('', function () {
    return view('welcome');
});
*/

Route::resource('/senalamientos', ClasificacionController::class,)->middleware('can:sennalamientos.index');
Route::get('/home', [ClasificacionController::class, 'index'])->name('senalamientos.index')->middleware('can:sennalamientos.index');
Route::get('/senalamientos/calificar/{id}', [ClasificacionController::class, 'create'])->name('calificar.senalamiento')->middleware('can:senalamientos.create');
Route::post('/senalamientos/{id}', [ClasificacionController::class, 'store'])->name('senalamientos.store');

Route::get('/', [SessionController::class, 'create'])->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');
Route::post('/sessions', [SessionController::class, 'store']);