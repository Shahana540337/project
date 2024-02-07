<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\SkillaboutController;
use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;



Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/blog-single/{id}', [WelcomeController::class,'show']);
Route::get('/allBlog', [WelcomeController::class,'allBlog']);
Route::get('/categoryBlogs/{id}', [WelcomeController::class,'categoryBlogs']);

Route::get('/dashboard', [ProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

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


Route::get('/setting',[SettingController::class,'index']);
Route::get('/setting-edit/{id}',[SettingController::class,'edit']);
Route::put('/setting-update/{id}',[SettingController::class,'update']);



Route::get('/contact-index',[ContactController::class,'index']);
Route::get('/contact-create', [ContactController::class,'create']);
Route::post('/contact-store', [ContactController::class,'store']);
Route::get('/contact-delete/{id}', [ContactController::class,'delete']);



Route::get('/service-index',[ServiceController::class,'index']);
Route::get('/service-create', [ServiceController::class,'create']);
Route::post('/service-store', [ServiceController::class,'store']);
Route::get('/service-delete/{id}', [ServiceController::class,'delete']);
Route::get('/service-edit/{id}', [ServiceController::class,'edit']);
Route::put('/service-update/{id}', [ServiceController::class,'update']);


Route::get('/about',[AboutController::class,'index']);
Route::get('/about-edit/{id}',[AboutController::class,'edit']);
Route::put('/about-update/{id}',[AboutController::class,'update']);


Route::get('/aboutSkill',[SkillaboutController::class,'skill_index']);
Route::get('/aboutSkill-create',[SkillaboutController::class,'skill_create']);
Route::post('/aboutSkill-store',[SkillaboutController::class,'skill_store']);
Route::get('/aboutSkill-delete/{id}',[SkillaboutController::class,'skill_delete']);
Route::get('/aboutSkill-edit/{id}',[SkillaboutController::class,'skill_edit']);
Route::put('/aboutSkill-update/{id}',[SkillaboutController::class,'skill_update']);



Route::get('/portfolio-index',[PortfolioController::class,'index']);
Route::get('/portfolio-create', [PortfolioController::class,'create']);
Route::post('/portfolio-store', [PortfolioController::class,'store']);
Route::get('/portfolio-delete/{id}', [PortfolioController::class,'delete']);
Route::get('/portfolio-edit/{id}', [PortfolioController::class,'edit']);
Route::put('/portfolio-update/{id}', [PortfolioController::class,'update']);



Route::get('/blogCategory-index',[BlogCategoryController::class,'index']);
Route::get('/blogCategory-create', [BlogCategoryController::class,'create']);
Route::post('/blogCategory-store', [BlogCategoryController::class,'store']);
Route::get('/blogCategory-delete/{id}', [BlogCategoryController::class,'delete']);
Route::get('/blogCategory-edit/{id}', [BlogCategoryController::class,'edit']);
Route::put('/blogCategory-update/{id}', [BlogCategoryController::class,'update']);



Route::get('/banner',[BannerController::class,'index']);
Route::get('/banner-edit/{id}',[BannerController::class,'edit']);
Route::put('/banner-update/{id}',[BannerController::class,'update']);