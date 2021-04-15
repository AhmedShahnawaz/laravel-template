<?php

use App\Http\Controllers\demo;
use App\Http\Controllers\Pages;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [demo::class, 'home'])->name('home');
Route::get('/service', [demo::class, 'service'])->name('services');
Route::get('/services', [demo::class, 'services'])->name('services-p');
Route::get('/blog', [demo::class, 'blog'])->name('blog');
Route::get('/post', [demo::class, 'blogp'])->name('post');
Route::get('/about', [demo::class, 'about'])->name('about');
Route::get('/contect', [demo::class, 'contect'])->name('contect');


// Route::get('/', [Pages::class,'index'])->name('home');

// Route::get('/services', [Pages::class,'service'])->name('services');

// Route::get('/service',  [Pages::class,'singleservice'])->name('singleservice');

// Route::get('/blogs',   [Pages::class,'blog'])->name('blogs');

// Route::get('/blog', [Pages::class,'blogpost'])->name('singleblog');

// Route::get('/about', [Pages::class,'about'])->name('about');

// Route::get('/contact', [Pages::class,'contact'])->name('contact');
