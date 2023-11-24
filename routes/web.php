<?php

use App\Http\Controllers\Main\EnterInRoomController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', IndexController::class)->name('main.index');
    Route::get('/new-room', CreateRoomController::class)->name('main.new-room');
    Route::get('/join', EnterInRoomController::class)->name('main.enter');
    Route::get('/check', [EnterInRoomController::class, 'check'])->name('main.check');
    Route::get('/room-{room_number}', ShowController::class)->name('main.room');
});
