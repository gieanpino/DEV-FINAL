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
Route::delete('/Eliminar/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
Route::get('/edit/{user}', [App\Http\Controllers\UserController::class, 'updateUser'])->name('users.update');
Route::get('/editUser/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('update');


//rutas de homeController
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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

//rutas de EncargadoController
Route::resource('Encargado', 'App\Http\Controllers\EncargadoController');
Route::get('/createEncargado', [App\Http\Controllers\EncargadoController::class, 'create'])->name('create.Encargado');

//rutas de EncargadoSGSSTController
Route::get('/encargado_sgsst', [App\Http\Controllers\EncargadoSGSST::class, 'index'])->name('encargado_sgsst.index');
Route::get('/encargado_sgsst/create', [App\Http\Controllers\EncargadoSGSST::class, 'create'])->name('encargado_sgsst.create');
Route::post('/encargado_sgsst/store', [App\Http\Controllers\EncargadoSGSST::class, 'store'])->name('encargado_sgsst.store');
Route::get('/encargado_sgsst/show/{id}', [App\Http\Controllers\EncargadoSGSST::class, 'show'])->name('encargado_sgsst.show');
Route::get('/encargado_sgsst/edit/{id}', [App\Http\Controllers\EncargadoSGSST::class, 'edit'])->name('encargado_sgsst.edit');
Route::put('/encargado_sgsst/update/{id}', [App\Http\Controllers\EncargadoSGSST::class, 'update'])->name('encargado_sgsst.update');
Route::delete('/encargado_sgsst/delete/{id}', [App\Http\Controllers\EncargadoSGSST::class, 'delete'])->name('encargado_sgsst.delete');

//rutas de AliadosController
Route::get('/aliado', [App\Http\Controllers\AliadosController::class, 'index'])->name('aliado.index');
Route::get('/aliado/create', [App\Http\Controllers\AliadosController::class, 'create'])->name('aliado.create');
Route::post('/aliado/store', [App\Http\Controllers\AliadosController::class, 'store'])->name('aliado.store');
Route::get('/aliado/show/{id}', [App\Http\Controllers\AliadosController::class, 'show'])->name('aliado.show');
Route::get('/aliado/edit/{id}', [App\Http\Controllers\AliadosController::class, 'edit'])->name('aliado.edit');
Route::put('/aliado/update/{id}', [App\Http\Controllers\AliadosController::class, 'update'])->name('aliado.update');
Route::delete('/aliado/delete/{id}', [App\Http\Controllers\AliadosController::class, 'delete'])->name('aliado.delete');

//rutas de CompromisosController
Route::get('/compromiso', [App\Http\Controllers\CompromisosController::class, 'index'])->name('compromiso.index');
Route::get('/compromiso/create', [App\Http\Controllers\CompromisosController::class, 'create'])->name('compromiso.create');
Route::post('/compromiso/store', [App\Http\Controllers\CompromisosController::class, 'store'])->name('compromiso.store');
Route::get('/compromiso/show/{id}', [App\Http\Controllers\CompromisosController::class, 'show'])->name('compromiso.show');
Route::get('/compromiso/edit/{id}', [App\Http\Controllers\CompromisosController::class, 'edit'])->name('compromiso.edit');
Route::put('/compromiso/update/{id}', [App\Http\Controllers\CompromisosController::class, 'update'])->name('compromiso.update');
Route::delete('/compromiso/delete/{id}', [App\Http\Controllers\CompromisosController::class, 'delete'])->name('compromiso.delete');

//rutas de PoliticaController
Route::get('/politica', [App\Http\Controllers\PoliticaController::class, 'index'])->name('politica.index');
Route::get('/politica/create', [App\Http\Controllers\PoliticaController::class, 'create'])->name('politica.create');
Route::post('/politica/store', [App\Http\Controllers\PoliticaController::class, 'store'])->name('politica.store');
Route::get('/politica/show/{id}', [App\Http\Controllers\PoliticaController::class, 'show'])->name('politica.show');
Route::get('/politica/edit/{id}', [App\Http\Controllers\PoliticaController::class, 'edit'])->name('politica.edit');
Route::put('/politica/update/{id}', [App\Http\Controllers\PoliticaController::class, 'update'])->name('politica.update');
Route::delete('/politica/delete/{id}', [App\Http\Controllers\PoliticaController::class, 'delete'])->name('politica.delete');

//rutas de RiesgosController
Route::get('/riesgo', [App\Http\Controllers\RiesgosController::class, 'index'])->name('riesgo.index');
Route::get('/riesgo/create', [App\Http\Controllers\RiesgosController::class, 'create'])->name('riesgo.create');
Route::post('/riesgo/store', [App\Http\Controllers\RiesgosController::class, 'store'])->name('riesgo.store');
Route::get('/riesgo/show/{id}', [App\Http\Controllers\RiesgosController::class, 'show'])->name('riesgo.show');
Route::get('/riesgo/edit/{id}', [App\Http\Controllers\RiesgosController::class, 'edit'])->name('riesgo.edit');
Route::put('/riesgo/update/{id}', [App\Http\Controllers\RiesgosController::class, 'update'])->name('riesgo.update');
Route::delete('/riesgo/delete/{id}', [App\Http\Controllers\RiesgosController::class, 'delete'])->name('riesgo.delete');

//rutas de PlanController
Route::get('/plan', [App\Http\Controllers\PlanController::class, 'index'])->name('plan.index');
Route::get('/plan/create', [App\Http\Controllers\PlanController::class, 'create'])->name('plan.create');
Route::post('/plan/store', [App\Http\Controllers\PlanController::class, 'store'])->name('plan.store');
Route::get('/plan/show/{id}', [App\Http\Controllers\PlanController::class, 'show'])->name('plan.show');
Route::get('/plan/edit/{id}', [App\Http\Controllers\PlanController::class, 'edit'])->name('plan.edit');
Route::put('/plan/update/{id}', [App\Http\Controllers\PlanController::class, 'update'])->name('plan.update');
Route::delete('/plan/delete/{id}', [App\Http\Controllers\PlanController::class, 'delete'])->name('plan.delete');
