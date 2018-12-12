<?php
Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', 'Untrefmedia\UMAdmin\App\Http\Controllers\Admin\AdminController@index');
    Route::get('/dashboard', 'Untrefmedia\UMAdmin\App\Http\Controllers\Admin\DashboardController@index');


});