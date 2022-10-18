<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ControladorFoto;

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
    return view('welcomeL');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
      Route::get('/comunidade', function () {
        return Inertia::render('Comunidade');
    })->name('comunidade');
});

/* Rotas admin*/



Route::get('/admin/login',[ App\Http\Controllers\Auth\AdminLoginController::class,'index']) -> name ('login-admin') ;
Route::post('/admin/login',[ App\Http\Controllers\Auth\AdminLoginController::class,'login']) -> name ('login-admin-submit');
Route::get('/admin', [ App\Http\Controllers\ControladorFoto::class,'index'])->name ('home-admin') ;
Route::post('/admin/logout',[ App\Http\Controllers\Auth\AdminLoginController::class,'logout']) -> name ('logout-admin') ;

Route::get('/formulario', [App\Http\Controllers\ControladorFoto::class, 'create']);

Route::get('/filmes', [App\Http\Controllers\ControladorFoto::class, 'index']);
Route::post('/filmes', [App\Http\Controllers\ControladorFoto::class, 'store']);

Route::delete('/filmes/{foto}', [App\Http\Controllers\ControladorFoto::class, 'destroy']);
Route::get('/filmes/{foto}/edit', [App\Http\Controllers\ControladorFoto::class, 'edit']);
Route::put('/filmes/{foto}', [App\Http\Controllers\ControladorFoto::class, 'update']);

/* Rotas obra*/

Route::get('/obra/{foto}', [App\Http\Controllers\ControladorFoto::class, 'show']);

/* Rotas mostrar mais*/

Route::get('/mostrarmais', [App\Http\Controllers\ControladorFoto::class, 'indexmais']);
Route::post('/mostrarmais', [App\Http\Controllers\ControladorFoto::class, 'storemais']);

