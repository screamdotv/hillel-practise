<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('main-page');

Route::prefix('/user')->group( function() {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/item/{id}', [UserController::class, 'item'])->name('user.item');
});
Route::prefix('/event')->group( function() {
    Route::get('/', [EventController::class, 'index'])->name('event.index');
    Route::get('/item/{id}', [EventController::class, 'item'])->name('event.item');
});