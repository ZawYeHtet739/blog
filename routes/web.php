<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/articles/add', [ArticleController::class, 'add']);

Route::post('/articles/add', [
    ArticleController::class,
    'create'
]);

Route::get('/articles/delete/{id}', [
    ArticleController::class,
    'delete'
]);

Route::post('/comments/add', [
    CommentController::class,
    'create'

]);

Route::get('/comments/delete/{id}', [
    CommentController::class,
    'delete'
]);
