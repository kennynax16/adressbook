<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[\App\Http\Controllers\AdressbookController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/create',[\App\Http\Controllers\AdressbookController::class,'create'])->name('create');
    Route::post('/create',[\App\Http\Controllers\AdressbookController::class,'store'])->name('store');
    Route::get('/user/{user}/edit',[\App\Http\Controllers\AdressbookController::class,'edit'])->name('edit');
    Route::patch('/user/{user}',[\App\Http\Controllers\AdressbookController::class,'update'])->name('update');
    Route::delete('/user/{user}',[\App\Http\Controllers\AdressbookController::class,'delete'])->name('delete');
    Route::get('/search',[\App\Http\Controllers\AdressbookController::class,'search'])->name('search');
});



require __DIR__.'/auth.php';
