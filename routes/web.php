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
Route::get('/',[WelcomeController::class,'welcome'])->name('index');
Route::get('/Nosotros',[WelcomeController::class,'nosotros'])->name('nosotros');

Route::get('/Clientes',[WelcomeController::class,'galeria'])->name('galeria');
Route::get('/Preguntas-frecuentes',[WelcomeController::class,'faq'])->name('faq');
Route::get('/Derechos-y-deberes',[WelcomeController::class,'dd'])->name('dd');
Route::get('/Contacto',[WelcomeController::class,'contacto'])->name('contact');
Route::get('/Cita',[WelcomeController::class,'cita'])->name('cita');
Route::get('/Covid-19',[WelcomeController::class,'covid'])->name('covid');
Route::get('/EstadosFinancieros',[WelcomeController::class,'finan'])->name('finan');
Route::get('/pqr',[WelcomeController::class,'pqr'])->name('pqr');
Route::get('/pqrs',[WelcomeController::class,'pqrs'])->name('pqrs');
Route::get('/ConsentimeintoInformado',[WelcomeController::class,'ConInf'])->name('ConInf');
Route::get('/PreparacionesDg',[WelcomeController::class,'PrDG'])->name('PrDG');
Route::get('/Trabaja-Con-Nosotros',[WelcomeController::class,'TrabNos'])->name('TrabNos');
Route::get('/Datos-De-Interes',[WelcomeController::class,'DatosInt'])->name('DatosInt');
Route::get('/Buscar',[WelcomeController::class,'search'])->name('search');
Route::Post('/BuscarTodo',[WelcomeController::class,'searchAll'])->name('searchAll');
Route::post('/Enviando-Trabaja-Con-Nosotros',[WelcomeController::class,'TrabNosSend'])->name('TrabNosSend');
Route::post('/Enviando-mensaje-contacto',[WelcomeController::class,'contactoSend'])->name('contactoSend');
Route::post('/Enviando-mensaje-cita',[WelcomeController::class,'citaSend'])->name('citaSend');
Route::post('/Enviando-mensaje-Pqrs',[WelcomeController::class,'pqrSend'])->name('pqrSend');
Route::post('/Enviando-encuesta-sastifacion',[WelcomeController::class,'encuestaSastifacion'])->name('encuesasti');
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

