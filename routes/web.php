<?php

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

Route::get('/', [Pages::class,'index'])->name('home');

Route::get('/services', [Pages::class,'service'])->name('services');

Route::get('/service',  [Pages::class,'singleservice'])->name('singleservice');

Route::get('/blogs',   [Pages::class,'blog'])->name('blogs');

Route::get('/blog', [Pages::class,'blogpost'])->name('singleblog');

Route::get('/about', [Pages::class,'about'])->name('about');

Route::get('/contact', [Pages::class,'contact'])->name('contact');
