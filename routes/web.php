<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/blogs/{category?}', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/servicedetails', [HomeController::class, 'servicedetails'])->name('servicedetails');
Route::get('/readmore', [HomeController::class, 'readmore'])->name('readmore');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/blogdetails', [HomeController::class, 'blogdetails'])->name('blogdetails');

// Blog routes
Route::get('/blog/index', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/delete/{blog}', [BlogController::class, 'delete'])->name('blog.delete');
Route::get('/blog/edit/{blog}', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('/blog/update/{blog}', [BlogController::class, 'update'])->name('blog.update');

// Category routes
Route::get('category/index', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::get('category/delete/{category}', [CategoryController::class, 'delete'])->name('category.delete');
Route::post('/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');


// About routes
Route::get('about/index', [AboutUsController::class, 'index'])->name('about.index');
Route::get('about/create', [AboutUsController::class, 'create'])->name('about.create');
Route::post('about/store', [AboutUsController::class, 'store'])->name('about.store');
Route::get('about/edit/{aboutUs}', [AboutUsController::class, 'edit'])->name('about.edit');
Route::get('about/delete/{aboutUs}', [AboutUsController::class, 'delete'])->name('about.delete');
Route::post('about/update/{aboutUs}', [AboutUsController::class, 'update'])->name('about.update');