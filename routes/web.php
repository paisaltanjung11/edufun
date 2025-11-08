<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticlesController::class, 'get_all_article'])->name('home.view');
Route::get('/categories', [CategoryController::class, 'getAllCategories'])->name('categories.view');
Route::get('/category/{id}', [CategoryController::class, 'getCategoryById'])->name('category.view');
Route::get('/popular', [ArticlesController::class, 'getPopularArticle'])->name('popular.view');
Route::get('/writer', [AuthorController::class, 'get_authors'])->name('writer.view');
Route::get('/writer_detail/{id}', [AuthorController::class, 'get_authorById'])->name('writer_detail.view');
Route::view('/aboutus', 'main.aboutus')->name('aboutus.view');
Route::get('/readmore/{id}',[ArticlesController::class, 'getArticlebyID'])->name('readmore.view');
