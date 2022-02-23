<?php

use App\Http\Controllers\ArticleController;
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

// Route Resource Article
Route::get('/articles', [ArticleController::class, 'index']);
Route::post('/store', [ArticleController::class, 'store'])->name('store-articles');
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit']);
Route::put('/articles/{id}', [ArticleController::class, 'update']);
Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);
// Route for get articles for yajra post request.
Route::get('/get-articles', [ArticleController::class, 'getArticles'])->name('get-articles');
