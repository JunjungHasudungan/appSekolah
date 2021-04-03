<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* Route::apiResource('major', 'Api\\MajorController');
Route::post('/major', 'Api\\MajorController@store'); */

Route::resource('major', 'Api\\MajorApiController');
Route::apiResource('permission', 'Api\\PermissionApiController');