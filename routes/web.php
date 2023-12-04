<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
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

Route::get('/',function(){
    return view('welcome');
});
Route::get('alumnos',[AlumnoController::class,'alumnos'])->name('alumnos');
Route::put('update/{alumno}',[AlumnoController::class,'update'])->name('editstore');
Route::get('create',[AlumnoController::class,'create'])->name('create');
Route::get('alumnos/{id}',[AlumnoController::class,'show'])->name('show');
Route::get('edit/{id}',[AlumnoController::class,'edit'])->name('edit');
Route::post('store',[AlumnoController::class,'store'])->name('store');
Route::get('delete/comfirm/{id}',[AlumnoController::class,'confirmar'])->name('delete.confirm');
Route::get('delete/{id}',[AlumnoController::class,'delete'])->name('delete');
