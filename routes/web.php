<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, "home"]) ->name("home");


Route::get("/contatti", [PageController::class, 'contatti']) ->name("contatti");


Route::get("/articoli", [PageController::class, 'articoli']) ->name("articoli");


Route::get("/chi-siamo", [PageController::class, 'ChiSiamo']) ->name("chi-siamo");


Route::get("/news", [PageController::class, 'news'])->name("news");






