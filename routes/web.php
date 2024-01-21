<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/blog-index',[BlogController::class,'index']);
Route::get('/blog-create', [BlogController::class,'create']);
Route::post('/blog-store', [BlogController::class,'store']);
Route::get('/blog-delete/{id}', [BlogController::class,'delete']);
Route::get('/blog-edit/{id}', [BlogController::class,'edit']);
Route::put('/blog-update/{id}', [BlogController::class,'update']);