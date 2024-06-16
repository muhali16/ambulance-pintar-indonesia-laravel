<?php

use Illuminate\Support\Facades\Route;

Route::get("/", [\App\Http\Controllers\WebController::class, 'index'])->name('web.index');
Route::get("/search", [\App\Http\Controllers\WebController::class, 'search'])->name('web.search');
Route::get('/about', [\App\Http\Controllers\WebController::class, 'about'])->name('web.about');

Route::prefix('/products')
    ->controller(\App\Http\Controllers\ProductController::class)->group(function (){
    Route::get('/{productCategory}', 'index')->name('products.index');
    Route::get('/{productCategory}/{product}', 'show')->name('products.show');
});


Route::resource("/gallery", \App\Http\Controllers\GalleryController::class)->only("index");
Route::resource("/articles", \App\Http\Controllers\ArticleController::class)->only(['index', 'show'])->scoped(['article' => 'slug']);
