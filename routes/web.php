<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/about', function () {
//     return view('about');
// });


Route::get('/', [App\Http\Controllers\PagesController::class, 'home']);
Route::get('/post', [App\Http\Controllers\PagesController::class, 'post'])-> name('post');
Route::get('/author', [App\Http\Controllers\PagesController::class, 'author'])-> name('author');
Route::get('/contacts', [App\Http\Controllers\PagesController::class, 'contacts'])-> name('contacts');
Route::get('/products', [App\Http\Controllers\PagesController::class, 'products'])-> name('products');

//Resource for posts
Route::resource('/blog', PostsController::class);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])-> name('home');

// Path to Admin Dashboard or User Dashboard.
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'about'])-> name('about');

// Route::get('/about', [App\Http\Controllers\AboutController::class, 'about']) -> name('about');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
