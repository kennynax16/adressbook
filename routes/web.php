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





Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[\App\Http\Controllers\AdressbookController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user/{user}/edit',[\App\Http\Controllers\AdressbookController::class,'edit'])->middleware(['admin'])->name('edit');
    Route::patch('/user/{user}',[\App\Http\Controllers\AdressbookController::class,'update'])->middleware(['admin'])->name('update');
    Route::delete('/user/{user}',[\App\Http\Controllers\AdressbookController::class,'delete'])->middleware(['admin'])->name('delete');
    Route::get('/search',[\App\Http\Controllers\AdressbookController::class,'search'])->name('search');
});



require __DIR__.'/auth.php';
