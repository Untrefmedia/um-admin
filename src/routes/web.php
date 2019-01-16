<?php

Route::group(['prefix' => 'admin','middleware'=>['web', 'admin', 'auth:admin']], function ($route) {

//dd($route);
    Route::get('dashboard', '\Untrefmedia\UMAdmin\App\Http\Controllers\Admin\DashboardController@index');

});