<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CarreraController;
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

Route::get('/', function () {
    return view('layout');
});
Route::get('estudiante', [EstudianteController::class,'index'])->name('estudiante.index');
Route::get('estudiante/create', [EstudianteController::class,'create'])->name('estudiante.create');
Route::post('estudiante', [EstudianteController::class,'store'])->name('estudiante.store');
Route::get('estudiante/{estudiante}/edit', [EstudianteController::class,'edit'])->name('estudiante.edit');
Route::put('estudiante/{estudiante}', [EstudianteController::class,'update'])->name('estudiante.update');