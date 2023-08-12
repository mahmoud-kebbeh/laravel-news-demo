<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;

use App\Http\Controllers\SearchController;

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

Route::get('/news/search', [NewsController::class, 'search'])->name('news.search');
Route::resource('news', NewsController::class);

Route::get('/categories/search', [CategoryController::class, 'search'])->name('categories.search');
Route::resource('categories', CategoryController::class);

Route::get('/tags/search', [TagController::class, 'search'])->name('tags.search');
Route::resource('tags', TagController::class);


Route::get('/', function () {
    return view('welcome');
})->name('homepage');
