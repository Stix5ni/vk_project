<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', [MainController::class, 'home']);

Route::get('about', [MainController::class, 'about']);

Route::get('articles', [MainController::class, 'articles']);

Route::get('articles/{id}', [MainController::class, 'id']);


