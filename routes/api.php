<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
*/


Route::group(['prefix' => 'admin', 'namespace' => 'Api\Admin'], function(){
    // Users
    Route::apiResource('user', 'UserApiController');
    
    // majors
    Route::apiResource('major', 'MajorApiController');
    
    // Permissions
    Route::apiResource('permission', 'PermissionApiController');

        // Roles
        Route::apiResource('roles', 'PermissionApiController');
});