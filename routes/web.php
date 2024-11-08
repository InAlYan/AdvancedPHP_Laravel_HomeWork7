<?php

use App\Http\Controllers\UserController;
use \App\Http\Controllers\PdfGeneratorController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [UserController::class, 'showForm']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/{id}', [UserController::class, 'get']);

Route::post('/store-user', [UserController::class, 'store']);

Route::get('/resume/{id}', [PdfGeneratorController::class, 'index']);
