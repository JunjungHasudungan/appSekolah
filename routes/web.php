<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::redirect('/', '/login');

// Auth::routes();
Route::group([
    'prefix'        => 'admin',
    'as'            => 'admin.',
    'namespace'     => 'admin',
    // 'middleware'    => ['auth']

], function(){

    // Route::get('/', 'HomeController@index')->name('home');

    // Registrations
    Route::resource('registration', 'RegistrationController');

    // Majors
    Route::resource('major', 'MajorController');
    
    // Permissions
    Route::resource('permission', 'PermissionController');
    
    // Courses
    Route::resource('courses', 'CoursesController');
    
    // Users
    Route::resource('user', 'UserController');
});
// Route::get('/home', 'HomeController@index')->name('home');