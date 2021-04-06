<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Auth::routes();
Route::group([
    'prefix'        => 'admin',
    'as'            => 'admin.',
    'namespace'     => 'Admin',
    // 'middleware'    => ['auth', 'admin']

], function(){

    // Route::get('/', 'HomeController@index')->name('home');
    // Registrations
    Route::resource('registration', RegistrationController::class);
    // Majors
    Route::resource('major', MajorController::class);
    // Permissions
    Route::resource('permission', PermissionController::class);
    // Courses
    Route::resource('courses', CoursesController::class);
    // Users
    Route::resource('user', UserController::class);
});
// Route::get('/home', 'HomeController@index')->name('home');