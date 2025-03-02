<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');