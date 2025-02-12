<?php

// use App\Http\Controllers\ProfileController; // コメントアウトにする
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController; // 追記
use App\Http\Controllers\TasklistController; //追記
use App\Http\Controllers\TasksController;
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
Route::get('/', [TasksController::class, 'index']);


Route::get('/dashboard', [TasksController::class, 'index'])->middleware(['auth'])->name('dashboard');
//  Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->name('dashboard');


// 認証されたユーザーの処理
Route::middleware('auth')->group(function () {
    Route::resource('tasks',TasksController::class);
});

require __DIR__.'/auth.php';
