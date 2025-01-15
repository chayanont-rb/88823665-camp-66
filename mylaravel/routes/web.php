<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;

Route::get('/mycontroller',
    [MyController::class,'myfunction']);

Route::post('/mycontroller',
    [MyController::class,'myfunction']);

Route::get('/login',
    [LoginController::class,'index']);
Route::get('register',
    [RegisterController::class,'index']);
Route::get('home',
    [HomeController::class,'index']);
Route::get('/',
    [HomeController::class,'index']);


Route::get('/', function () {
    return view('home');
});
Route::get('/hello/{id?}',
function($val="")
{
    return "<h1>Hello world$val</h1>";
});
