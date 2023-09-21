<?php

use App\Http\Controllers\ComentarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PublicacaoController;

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

//rotas de usuarios
Route::delete('/usuarios/{id}',[UsuarioController::class, 'delete'])->name('usuarios.delete');
Route::put('/usuarios/{id}',[UsuarioController::class, 'update'])->name('usuarios.update');
Route::get('/usuarios/{id}/edit',[UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::get('/usuarios',[UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create',[UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios/store',[UsuarioController::class, 'store'])->name('usuarios.store');

Route::get('/usuarios/{id}',[UsuarioController::class, 'show'])->name('usuarios.show');

//rotas de publicacao
Route::get('/publicacoes',[PublicacaoController::class, 'index'])->name('publicacoes.index');
Route::get('/publicacoes/create',[PublicacaoController::class, 'create'])->name('publicacoes.create');
Route::post('/publicacoes/store',[PublicacaoController::class, 'store'])->name('publicacoes.store');

Route::get('/publicacoes/{id}',[PublicacaoController::class, 'show'])->name('publicacoes.show');

Route::get('/publicacoes/{id}/comentarios-create',[ComentarioController::class, 'create'])->name('comentarios.create');
Route::post('/publicacoes/{id}/comentarios-store',[ComentarioController::class, 'store'])->name('comentarios.store');

Route::get('/', function () {
    return view('welcome');
});

