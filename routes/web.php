<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

Route::get('/', [ViewController::class, 'index']);
Route::get('/skills', [ViewController::class, 'skills']);
Route::get('/contact', [ViewController::class, 'contact']);
Route::get('/portfolio', [ViewController::class, 'portfolio']);


