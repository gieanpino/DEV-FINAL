<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BeController;
use App\Http\Controllers\CocolaController;
use App\Http\Controllers\CopasstController;
use App\Http\Controllers\SgsstController;
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

Route::resource('/EsBe', BeController::class);
Route::resource('/EsCocola', CocolaController::class);
Route::resource('/EsCopasst', CopasstController::class);
Route::resource('/EsSgsst', SgsstController::class);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Prueba', function () {
    return view('Prueba');
});
Route::get('/dashboard', function () {
    return view('home');
});

Route::resource('Copasst', 'BankController');

Auth::routes();

Route::get('/registrar', [App\Http\Controllers\UserController::class, 'create'])->name('registrar');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/searchUser', [App\Http\Controllers\UserController::class,'search'])->name('searchUser');
Route::get('/search', [App\Http\Controllers\UserController::class, 'searchUser'])->name('users.search');
Route::get('/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::delete('/Eliminar/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
Route::get('/edit/{user}', [App\Http\Controllers\UserController::class, 'updateUser'])->name('users.update');
Route::get('/editUser/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Formularios', [App\Http\Controllers\SgsstController::class, 'Formularios'])->name('Formularios');

Route::get('/Empresa', [App\Http\Controllers\SgsstController::class, 'Empresa'])->name('Empresa');
Route::get('/Reportes', [App\Http\Controllers\SgsstController::class, 'Reportes'])->name('Reportes');


Route::get('/Documentacion', [App\Http\Controllers\SgsstController::class, 'Documentacion'])->name('Documentacion');


Route::get('/Indicadores', [App\Http\Controllers\SgsstController::class, 'Indicadores'])->name('Indicadores');


Route::get('/actascocola', [App\Http\Controllers\CocolaController::class, 'actas'])->name('actas');


Route::get('/planAnualcocola', [App\Http\Controllers\CocolaController::class, 'PlanAnual'])->name('planAnual');


Route::get('/actascopasst', [App\Http\Controllers\CopasstController::class, 'actas'])->name('actas');


Route::get('/planAnualcopasst', [App\Http\Controllers\CopasstController::class, 'PlanAnual'])->name('planAnual');


Route::get('/actasBE', [App\Http\Controllers\BeController::class, 'actas'])->name('actas');


Route::get('/planAnualBE', [App\Http\Controllers\BeController::class, 'PlanAnual'])->name('PlanAnual');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
