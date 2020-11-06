<?php

use App\Mail\RevisorMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
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

Route::get('/revisor/index', [RevisorController::class, 'index'])->name('revisor.index');



Route::get('/revisore', function () {
  
    Mail::to('admin@subito.it')->send(new RevisorMail(Auth::User()));
    return  view('revisor.thankyou')->with('message', "la tua richiesta è stata presa in carico");
 })->name('diventa.revisore')->middleware('auth');
Route::get('/search', [PublicController::class, 'search'])->name('search');

Route::get('/announcement/single', [AnnouncementController::class, 'single'])->name('announcement.single');




