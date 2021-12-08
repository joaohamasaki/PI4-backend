<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\HostController;

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::group(['middleware'=>'auth:sanctum'],function(){
    Route::resource('/room', RoomsController::class,['except' =>['show']]);
    Route::get('/trash/room', [RoomsController::class, 'trash'])->name('room.trash');
    Route::patch('/room/restore/{id}', [RoomsController::class, 'restore'])->name('room.restore');
    Route::resource('/category', CategoriesController::class);
    Route::resource('/host', HostController::class);
    Route::resource('/add', AddController::class);
});

Route::resource('/room', RoomsController::class,['only' =>['show']]);

