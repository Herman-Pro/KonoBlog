<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categorie', [HomeController::class, 'categorie'])->name('categorie');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about.us');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/news-title', [HomeController::class, 'newsTitle'])->name('news.title');
Route::get('/categorie-news-choisen', [HomeController::class, 'categoriesNewsChoisen'])->name('categories.news.choisen');