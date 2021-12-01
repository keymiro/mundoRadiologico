<?php

use App\Http\Controllers\informationController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/Inicio',[WelcomeController::class,'welcome'])->name('index');
Route::get('/Nosotros',[WelcomeController::class,'nosotros'])->name('nosotros');
Route::get('/Servicios',[WelcomeController::class,'servicios'])->name('servicios');
Route::get('/Medicos',[WelcomeController::class,'medicos'])->name('medicos');
Route::get('/Galeria',[WelcomeController::class,'galeria'])->name('galeria');
Route::get('/Preguntas-frecuentes',[WelcomeController::class,'faq'])->name('faq');
Auth::routes(['register' => false]);
Route::get('/Seccion/listado',[informationController::class,'index'])->name('info.home');
Route::get('/Seccion/crear',[informationController::class,'create'])->name('info.create');
Route::post('/Seccion/guardar',[informationController::class,'store'])->name('info.store');
Route::get('/Seccion/editar/{id}',[informationController::class,'edit'])->name('info.edit');
Route::patch('/Seccion/editar/{id}',[informationController::class,'update'])->name('info.update');
Route::delete('/Seccion/eliminar/{id}',[informationController::class,'delete'])->name('info.delete');
Route::post('Seccion/subirImagen',[informationController::class,'upload'])->name('upload');

Route::get('/Categoria/listado',[informationController::class,'indexCategory'])->name('info.indexCategory');
Route::get('/Categoria/crear',[informationController::class,'createCategory'])->name('info.createCategory');
Route::get('/Categoria/editar/{id}',[informationController::class,'editCategory'])->name('info.editCategory');
Route::post('/Categoria/guardar',[informationController::class,'storeCategory'])->name('info.storeCategory');
Route::patch('/Categoria/actualizar/{id}',[informationController::class,'updateCategory'])->name('info.updateCategory');
Route::delete('/Categoria/eliminar/{id}',[informationController::class,'deleteCategory'])->name('info.deleteCategory');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

