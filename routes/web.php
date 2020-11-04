<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncementController;

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


Auth::routes();



Route::get('/announcement/new', [AnnouncementController::class, 'create'])->name('announcement.new')->middleware('auth');

Route::post('/announcement/store', [AnnouncementController::class, 'store'])->name('announcement.store')->middleware('auth');

Route::get('/', [PublicController::class, 'index'])->name('home');

Route::get('/category/{name}/{id}/announcements', [PublicController::class, 'announcementsByCategory'])->name('category.announcements');

Route::get('/category/count', [PublicController::class, 'countCategory'])->name('count.category');

Route::get('/tutti', function () {
    $user=User::all();
    return $user;
})->middleware('auth.revisor');