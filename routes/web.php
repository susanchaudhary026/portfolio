<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

Route::get('/', [ViewController::class, 'index']);
Route::get('/about', [ViewController::class, 'about']);
Route::get('/skills', [ViewController::class, 'skills']);
Route::get('/portfolio', [ViewController::class, 'portfolio']);


