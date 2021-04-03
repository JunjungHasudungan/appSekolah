<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::resource('registration', RegistrationController::class);
Route::resource('major', MajorController::class);
Route::resource('permission', PermissionController::class);
Route::resource('courses', CoursesController::class);
Route::resource('user', UserController::class);