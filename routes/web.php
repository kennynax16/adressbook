<?php

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



Route::get('/item',[\App\Http\Controllers\AdressbookController::class,'index'])->name('index');
Route::get('/create',[\App\Http\Controllers\AdressbookController::class,'create'])->name('create');
Route::post('/create',[\App\Http\Controllers\AdressbookController::class,'store'])->name('store');
Route::get('/item/{item}/edit',[\App\Http\Controllers\AdressbookController::class,'edit'])->name('edit');
Route::patch('/item/{item}',[\App\Http\Controllers\AdressbookController::class,'update'])->name('update');
Route::delete('/item/{item}',[\App\Http\Controllers\AdressbookController::class,'delete'])->name('delete');
Route::get('/search',[\App\Http\Controllers\AdressbookController::class,'search'])->name('search');



