<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [ArticleController::class, 'get_welcome_articles'])->name('welcome');
Route::get('/articles', [ArticleController::class, 'get_all_articles'])->name('articles');
Route::get('/trends', [ArticleController::class, 'get_trends'])->name('trends');
Route::get('/contact', function () {
    return view("contact");
})->name('contact');
Route::get('/article/{id}', [ArticleController::class, 'show_article'])->name('article');


