<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\ImagesController;


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


Route::controller(HomeController::class)->group(function() {
    Route::get('/home','home');
    Route::get('/single_album/{id}','single_album');
});

Route::controller(ContactController::class)->group(function() {
    Route::get('/contact','contact');
    Route::post('/contact','send')->name('contact');
});

Route::controller(AlbumsController::class)->group(function() {
    Route::get('gallery/add_album','create');
    Route::post('gallery/add_album','store');
    
});

Route::controller(ImagesController::class)->group(function() {
    Route::get('gallery/add_photo','create');
    Route::post('gallery/add_photo','store');
});



Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
