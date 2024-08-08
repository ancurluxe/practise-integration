<?php

use App\Http\Controllers\FontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services/details' ,[FontendController::class ,'details'])->name('details');
Route::get('/blogs/view' ,[FontendController::class ,'view'])->name('view');
Route::get('/home' ,[FontendController::class ,'home'])->name('home');
Route::get('/about-us' ,[FontendController::class ,'about'])->name('about');
Route::get('/blogs' ,[FontendController::class ,'blogs'])->name('blogs');
Route::get('/services' ,[FontendController::class ,'services'])->name('services');
Route::get('/contact' ,[FontendController::class ,'contact'])->name('contact');

require __DIR__.'/auth.php';