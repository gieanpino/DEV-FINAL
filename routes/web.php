<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BeController;
use App\Http\Controllers\CocolaController;
use App\Http\Controllers\CopasstController;
use App\Http\Controllers\SgsstController;

//rutas de acceso
Auth::routes();
Route::resource('/EsBe', BeController::class);
Route::resource('/EsCocola', CocolaController::class);
Route::resource('/EsCopasst', CopasstController::class);
Route::resource('/EsSgsst', SgsstController::class);
Route::get('/', function () {return view('welcome');});
Route::get('/Prueba', function () {return view('Prueba');});
Route::get('/dashboard', function () {return view('home');});
Route::resource('Copasst', 'BankController');


//Rutas de userController
Route::get('/registrar', [App\Http\Controllers\UserController::class, 'create'])->name('registrar');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/searchUser', [App\Http\Controllers\UserController::class,'search'])->name('searchUser');
Route::get('/search', [App\Http\Controllers\UserController::class, 'searchUser'])->name('users.search');
Route::get('/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::delete('/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('User.destroy');
Route::get('/edit/{user}', [App\Http\Controllers\UserController::class, 'updateUser'])->name('users.update');
Route::get('/editUser/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('update');


//rutas de homeController
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//rutas de SgsstController
Route::get('/Indicadores', [App\Http\Controllers\SgsstController::class, 'Indicadores'])->name('Indicadores');
Route::get('/Formularios', [App\Http\Controllers\SgsstController::class, 'Formularios'])->name('Formularios');
Route::get('/Archivos', [App\Http\Controllers\SgsstController::class, 'data'])->name('Archivos');
Route::get('/Empresa', [App\Http\Controllers\SgsstController::class, 'Empresa'])->name('Empresa');
Route::get('/Reportes', [App\Http\Controllers\SgsstController::class, 'Reportes'])->name('Reportes');
Route::get('/Documentacion', [App\Http\Controllers\SgsstController::class, 'Documentacion'])->name('Documentacion');


//rutas de CocolaController
Route::get('/actascocola', [App\Http\Controllers\CocolaController::class, 'actas'])->name('actas');
Route::get('/planAnualcocola', [App\Http\Controllers\CocolaController::class, 'PlanAnual'])->name('planAnual');



//rutas de CopasstController
Route::get('/actascopasst', [App\Http\Controllers\CopasstController::class, 'actas'])->name('actas');
Route::get('/planAnualcopasst', [App\Http\Controllers\CopasstController::class, 'PlanAnual'])->name('planAnual');

//rutas de BeController
Route::get('/actasBE', [App\Http\Controllers\BeController::class, 'actas'])->name('actas');
Route::get('/planAnualBE', [App\Http\Controllers\BeController::class, 'PlanAnual'])->name('PlanAnual');


//rutas de EmpresaController
Route::resource('Empresa', 'App\Http\Controllers\EmpresaController');
Route::get('/indexEmpresa', [App\Http\Controllers\EmpresaController::class, 'create'])->name('indexEmpresa');
Route::get('/Administrar', [App\Http\Controllers\EmpresaController::class, 'adjuntos'])->name('Administrar');
Route::post('/EmpresaStore', [App\Http\Controllers\EmpresaController::class, 'store'])->name('EmpresaStore');
Route::get('/editar/{empresa}', [App\Http\Controllers\EmpresaController::class, 'updateEmpresa'])->name('empresa.update');
Route::get('/editEmpresa/{empresa}', [App\Http\Controllers\EmpresaController::class, 'update'])->name('update.empresa');
Route::delete('/Eliminar/{id}', [App\Http\Controllers\EmpresaController::class, 'destroy'])->name('Empresa.destroy');
Route::get('/traerEmpresas', [App\Http\Controllers\EmpresaController::class, 'cargaraEncargados'])->name('Empresa.cargar');

//rutas de EncargadoController
Route::resource('Encargado', 'App\Http\Controllers\EncargadoController');
Route::get('/createEncargado', [App\Http\Controllers\EncargadoController::class, 'create'])->name('create.Encargado');
Route::post('/EncargadoStore', [App\Http\Controllers\EncargadoController::class, 'store'])->name('EncargadoStore');