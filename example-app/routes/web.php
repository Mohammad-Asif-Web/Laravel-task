<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;



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

// Authentication Controller
// Route::group(['middleware' => 'guest'], function(){
    Route::get('login', [AuthenticationController::class, 'login'])->name('login');
    Route::post('login', [AuthenticationController::class, 'loginStore'])->name('login.store')->middleware('throttle:2,1');
    Route::get('register', [AuthenticationController::class, 'register'])->name('register');
    Route::post('register', [AuthenticationController::class, 'registerStore'])->name('register.store');
    
    Route::get('/', [AuthenticationController::class, 'home'])->name('home');
// });


Route::group(['middleware' => 'auth'], function(){
    Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');

    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::get('task', [TaskController::class, 'index'])->name('task.index');
    Route::get('task/create', [TaskController::class, 'create'])->name('task.create');
    Route::post('task', [TaskController::class, 'store'])->name('task.store');
    Route::get('task/{id}', [TaskController::class, 'show'])->name('task.show');
    Route::get('task/{id}/edit', [TaskController::class, 'edit'])->name('task.edit');
    Route::put('task/{id}', [TaskController::class, 'update'])->name('task.update');
    Route::delete('task/{id}',[TaskController::class, 'destroy'])->name('task.destroy');
});



