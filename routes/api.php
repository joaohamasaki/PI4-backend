<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\UserController;

Route::group(['middleware'=>'auth:sanctum'],function(){
    Route::get('/room', [RoomsController::class, 'indexApi']);
});

Route::post('/login', [UserController::class,'login']);
Route::post('/user', [UserController::class,'store']);