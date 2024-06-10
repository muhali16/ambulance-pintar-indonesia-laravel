<?php

use Illuminate\Support\Facades\Route;

Route::get("/", [\App\Http\Controllers\WebController::class, 'index'])->name('web.index');

Route::resource("/ambulances", \App\Http\Controllers\ProductAmbulanceController::class)->only(['index', 'show']);
Route::resource("/gallery", \App\Http\Controllers\GalleryController::class)->only("index");
Route::resource("/articles", \App\Http\Controllers\ArticleController::class)->only(['index', 'show'])->scoped(['article' => 'slug']);
//
//Route::prefix("/v1/dashboard")->group(function (){
//    Route::resource("/products", \App\Http\Controllers\ProductAmbulanceController::class)->except(['index', 'show']);
//    Route::resource("/gallery", \App\Http\Controllers\GalleryController::class)->except("index");
//    Route::resource("/articles", \App\Http\Controllers\ArticleController::class)->except(['index', 'show']);
//});
