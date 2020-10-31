<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
<<<<<<< HEAD
use App\Http\Controllers\PublicController;
=======
>>>>>>> 6fe9667c27138f82dbd6073570eb84ebfd053b99

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

<<<<<<< HEAD


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [PublicController::class, 'index'])->name('home');
=======

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
>>>>>>> 6fe9667c27138f82dbd6073570eb84ebfd053b99
