<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseadvertismentController;


// Route::get('/courses', [HomeController::class, 'index']);

Route::get('/', 'App\Http\Controllers\PagesController@index');

// Route::get('/about', 'App\Http\Controllers\PagesController@about');

Route::get('/registration', 'App\Http\Controllers\RegistrationController@index')->name('register');

Route::get('/courseadvertisement', [CourseadvertismentController::class,'index'])->name('cads');

Route::get('/login','App\Http\Controllers\LoginController@index')->name('login');

Route::get('/apply', 'App\Http\Controllers\ApplyController@index')->name('apply');

Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about');