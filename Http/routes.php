<?php

Route::group(['prefix' => 'dashboard', 'namespace' => 'Modules\Dashboard\Http\Controllers', 'middleware' => ['auth']], function()
{
	Route::get('/inicio', ['as' => 'dashboard.inicio', 'uses' => 'DashboardController@index']);
});