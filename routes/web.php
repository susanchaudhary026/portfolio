<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

Route::get('/', [ViewController::class, 'index'])->name('index');
Route::get('/skills', [ViewController::class, 'skills'])->name('admin.skills.index');
Route::get('/contact', [ViewController::class, 'contact'])->name('admin.contact.index');
Route::get('/projects', [ViewController::class, 'projects'])->name('admin.projects.index');
Route::get('/cv', [ViewController::class, 'cv'])->name('admin.cv.index');


  