<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

Route::get('/login',
    [LoginController::class,'index']);
Route::get('/register',
    [RegisterController::class,'index']);
Route::get('/home',
    [HomeController::class,'index']);
Route::get('/',
    [HomeController::class,'index']);


Route::post('/register',
    [RegisterController::class,'create']);


Route::get('/users', [UserController::class,'index']);
Route::get('/user/{id}', [UserController::class,'edit']);
Route::put('/user', [UserController::class,'edit_action']);
Route::delete('/user', [UserController::class,'delete']);







Route::get('/mycontroller',
    [MyController::class,'myfunction']);

Route::post('/mycontroller',
    [MyController::class,'myfunction']);
Route::get('/', function () {
    return view('home');
});
Route::get('/hello/{id?}',
function($val="")
{
    return "<h1>Hello world$val</h1>";
});
