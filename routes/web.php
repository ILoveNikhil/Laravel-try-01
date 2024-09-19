<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});
Route::get('user',[UserController::class,'getUser']);
Route::get('user/{name}',[UserController::class,'getUserName']);
Route::get('viewpage',[UserController::class,'getViewPage']);
Route::view('about','about');

// Admin

Route::get('admin-login/{name}',[UserController::class,'adminName'] );