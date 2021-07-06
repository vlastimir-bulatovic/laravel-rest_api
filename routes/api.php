<?php

use Illuminate\Http\Request;

// Route::get('/users', 'App\Http\Controllers\UserControler@index');
// Route::get('user/{id}', 'App\Http\Controllers\UserControler@show');
// Route::post('user', 'App\Http\Controllers\UserControler@store');
// Route::put('user/{id}', 'App\Http\Controllers\UserControler@update');
// Route::delete('user/{id}', 'App\Http\Controllers\UserControler@delete');

Route::post('login', 'App\Http\Controllers\AuthController@login');
Route::post('register', 'App\Http\Controllers\AuthController@register');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('logout', 'App\Http\Controllers\AuthController@logout');
    Route::get('user', 'App\Http\Controllers\AuthController@user');
});
?>