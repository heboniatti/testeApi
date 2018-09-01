<?php

Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function () {
	Route::apiResource('travel', 'TravelHistoryController');
});