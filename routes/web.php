<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

//Books
Route::get('/', [BookController::class, 'index'])->name('book.index');
Route::get('/book/{book}', [BookController::class, 'show'])->name('book.show');
Route::get('/addBook', [BookController::class, 'create'])->name('book.create');
Route::post('/storeBook', [BookController::class, 'store'])->name('book.store');
Route::get('/edit/{book}', [BookController::class, 'edit'])->name('book.edit');
Route::put('/update/{book}', [BookController::class, 'update'])->name('book.update');
Route::delete('/delete/{book}', [BookController::class, 'destroy'])->name('book.delete');

//Authors
Route::get('/author', [AuthorController::class, 'index'])->name('author.index');
Route::get('/addAuthor', [AuthorController::class, 'create'])->name('author.create');
Route::post('/storeAuthor', [AuthorController::class, 'store'])->name('author.store');
Route::get('/author/edit/{author}', [AuthorController::class, 'edit'])->name('author.edit');
Route::put('/author/update/{author}', [AuthorController::class, 'update'])->name('author.update');
Route::delete('/author/delete/{author}', [AuthorController::class, 'destroy'])->name('author.delete');

//Categories
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/addCategory', [CategoryController::class, 'create'])->name('category.create');
Route::post('/storeCategory', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/delete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');
