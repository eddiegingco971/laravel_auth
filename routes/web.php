<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\AuthController;
use  App\Http\Controllers\PostsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider Eddie Gingco within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    if(!auth()->guest()){
        return view('/dashboard');
    }
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', [AuthController::class, 'dashboard']);
    Route::get('/posts', [PostsController::class, 'index']);
    Route::get('/users', [AuthController::class, 'users']);
});

// Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');
// Route::get('/posts', [PostsController::class, 'index'])->middleware('auth');
// Route::get('/users', [AuthController::class, 'users'])->middleware('auth');

Route::get('/logout', [AuthController::class, 'logout']);

