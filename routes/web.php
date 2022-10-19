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

Route::get('/filmes', [App\Http\Controllers\ControladorFoto::class, 'index']) -> name('foto.index');
Route::post('/filmes', [App\Http\Controllers\ControladorFoto::class, 'store']);

Route::delete('/filmes/{foto}', [App\Http\Controllers\ControladorFoto::class, 'destroy']);
Route::get('/filmes/{foto}/edit', [App\Http\Controllers\ControladorFoto::class, 'edit']);
Route::put('/filmes/{foto}', [App\Http\Controllers\ControladorFoto::class, 'update']);

/* Rotas obra*/

Route::get('/obra/{foto}', [App\Http\Controllers\ControladorFoto::class, 'show']);

/* Rotas mostrar mais*/

Route::get('/mostrarmais', [App\Http\Controllers\ControladorFoto::class, 'indexmais']);
Route::post('/mostrarmais', [App\Http\Controllers\ControladorFoto::class, 'storemais']);

/* Rotas categorias*/

Route::get('/acao', [App\Http\Controllers\ControladorFoto::class, 'indexacao']);
Route::post('/acao', [App\Http\Controllers\ControladorFoto::class, 'storeacao']);
Route::get('/drama', [App\Http\Controllers\ControladorFoto::class, 'indexdrama']);
Route::post('/drama', [App\Http\Controllers\ControladorFoto::class, 'storedrama']);
Route::get('/comedia', [App\Http\Controllers\ControladorFoto::class, 'indexcomedia']);
Route::post('/comedia', [App\Http\Controllers\ControladorFoto::class, 'storecomedia']);
Route::get('/terror', [App\Http\Controllers\ControladorFoto::class, 'indexterror']);
Route::post('/terror', [App\Http\Controllers\ControladorFoto::class, 'storeterror']);
Route::get('/fantasia', [App\Http\Controllers\ControladorFoto::class, 'indexfantasia']);
Route::post('/fantasia', [App\Http\Controllers\ControladorFoto::class, 'storefantasia']);
Route::get('/sci-fi', [App\Http\Controllers\ControladorFoto::class, 'indexsci']);
Route::post('/sci-fi', [App\Http\Controllers\ControladorFoto::class, 'storesci']);

/* Rotas seearch*/
Route::post('/filmes/search', [App\Http\Controllers\ControladorFoto::class, 'search']) -> name ('foto.search') ;