<?php

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'admin', 'auth:admin']], function ($route) {
    Route::get('/', '\Untrefmedia\UMAdmin\App\Http\Controllers\Admin\DashboardController@index');
    Route::get('dashboard', '\Untrefmedia\UMAdmin\App\Http\Controllers\Admin\DashboardController@index');
});
