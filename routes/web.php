<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\EscenarioController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\TeamController;

Route::get('/', [AuthController::class,'index'])->name('root');

Route::get('/acceso', [AuthController::class,'acceso'])->name('login');
Route::post('/acceso', [AuthController::class,'login'])->name('login');
Route::get('/acceso/registro', [AuthController::class,'registro'])->name('login.registro');
Route::get('/acceso/terminos', [AuthController::class,'terminos'])->name('login.terminos');

Route::middleware('auth.user')->group( function () {
  Route::any('logout', [AuthController::class,'logout'])->name('logout');

  Route::get('home', [HomeController::class,'index'])->name('home.index');
  Route::get('escenarios', [EscenarioController::class,'index'])->name('escenario.index');
  Route::post('escenarios', [EscenarioController::class,'store'])->name('escenario.store');
  Route::get('escenarios/{id}', [EscenarioController::class,'show'])->name('escenario.show');
  Route::post('actividad', [ActividadController::class,'store'])->name('actividad.store');
  Route::put('escenarios/{id}/precio', [EscenarioController::class,'precio'])->name('escenario.update.precio');
  Route::get('escenarios/{id}/reporte', [EscenarioController::class,'reporte'])->name('escenario.reporte');


  Route::get('admin/perfil', [PerfilController::class,'index'])->name('admin.perfil.index');

  Route::get('admin/config', [ConfigController::class,'index'])->name('admin.config.index');
  Route::put('admin/config', [ConfigController::class,'update'])->name('admin.config.update');
  Route::get('admin/config/coin', [ConfigController::class,'coin'])->name('admin.config.coin');
  Route::put('admin/config/coin', [ConfigController::class,'coinUpdate'])->name('admin.config.coin');
  Route::get('admin/config/sistema', [SistemaController::class,'index'])->name('admin.sistema.index');
  Route::put('admin/config/sistema', [SistemaController::class,'update'])->name('admin.sistema.update');
  Route::put('admin/config/sistema/demo', [SistemaController::class,'demo'])->name('admin.sistema.demo');

  // Usuario
  Route::get('admin/usuario', [UsuarioController::class,'index'])->name('admin.usuario.index');
  Route::get('admin/usuario/admins', [UsuarioController::class,'admin'])->name('admin.usuario.admin');
  Route::get('admin/usuario/create', [UsuarioController::class,'create'])->name('admin.usuario.create');
  Route::post('admin/usuario', [UsuarioController::class,'store'])->name('admin.usuario.store');
  Route::get('admin/usuario/{id}', [UsuarioController::class,'show'])->name('admin.usuario.show');
  Route::get('admin/usuario/{id}/edit', [UsuarioController::class,'edit'])->name('admin.usuario.edit');
  Route::put('admin/usuario/{id}', [UsuarioController::class,'update'])->name('admin.usuario.update');
  // Route::delete('admin/usuario/{id}', [UsuarioController::class,'destroy'])->name('admin.usuario.delete');

  Route::get('admin/team', [TeamController::class,'index'])->name('admin.team.index');
  Route::get('admin/team/create', [TeamController::class,'create'])->name('admin.team.create');
  Route::post('admin/team', [TeamController::class,'store'])->name('admin.team.store');

  // Route::get('admin/report', [ReportController::class,'index'])->name('admin.report.index');

});
