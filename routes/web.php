<?php

use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\auth\logoutController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\mainController;
use App\Http\Controllers\produtoController;
use Illuminate\Support\Facades\Route;


//login
Route::get('/login', [mainController::class, 'login'])->name('login');
Route::post('/loginSubmit',[loginController::class, '__invoke'])->name('loginSubmit');

//middleware rotas liberata depois de login
Route::middleware(['auth'])->group(function(){
   
    Route::get('/',[mainController::class, 'dashBoard'])->name('dashboard');
    route::get('/produto',[mainController::class, 'produto'])->name('produto');
    Route::get('/movimento',[mainController::class, 'movimento'])->name('movimento');
    Route::get('/categoria',[mainController::class, 'categoria'])->name('categoria');
    Route::get('/usuario',[mainController::class, 'usuario'])->name('usuario');
    
    //formulario
    Route::post('/cadastraProdutos',[produtoController::class, 'cadastraProdutos'])->name('cadastraProdutos');
    
    //logout
    Route::get('/logout',[logoutController::class, '__invoke'])->name('logout');

});