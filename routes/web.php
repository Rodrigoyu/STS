<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\controller\itenController;
use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [mainController::class, 'login'])->name('login');
Route::get('/dashboard',[mainController::class, 'dashBoard'])->name('login');