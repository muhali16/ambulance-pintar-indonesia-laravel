<?php

use Illuminate\Support\Facades\Route;

Route::get("/", [\App\Http\Controllers\WebController::class, 'index'])->name('web.index');
//Route::get("/products", [\App\Http\Controllers\ProductAmbulanceController::class, 'indexProduct']);

Route::resource("/products", \App\Http\Controllers\ProductAmbulanceController::class);
Route::resource("/gallery", \App\Http\Controllers\GalleryController::class);
