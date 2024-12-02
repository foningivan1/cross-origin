<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LeMondeController;


Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/', function () {
    return view('index');
});

