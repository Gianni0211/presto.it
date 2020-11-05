<?php

use App\Models\User;
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

Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.home');

Route::post('/revisor/announcemet/{id}/accept', [RevisorController::class, 'accept'])->name('revisor.accept');
Route::post('/revisor/announcemet/{id}/reject', [RevisorController::class, 'reject'])->name('revisor.reject');







//rotte di merda
Route::get('/revisore', function () {
  
   Mail::to('luigi@luigi.it')->send(new RevisorMail(Auth::User()));
   return  view('revisor.thankyou')->with('message', "la tua richiesta è stata presa in carico");
})->name('diventa.revisore')->middleware('auth');



Route::get('/tutti', function () {
    $user=User::all();
    return $user;
})->middleware('auth.revisor');