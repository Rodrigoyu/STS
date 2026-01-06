<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\controller\itenController;
use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;


//login
Route::get('/login', [mainController::class, 'login'])->name('login');

//pagina depois do acesso
Route::get('/',[mainController::class, 'dashBoard'])->name('dashboard');
route::get('/produto',[mainController::class, 'produto'])->name('produto');
Route::get('/movimento',[mainController::class, 'movimento'])->name('movimento');
Route::get('/categoria',[mainController::class, 'categoria'])->name('categoria');
Route::get('/usuario',[mainController::class, 'usuario'])->name('usuario');