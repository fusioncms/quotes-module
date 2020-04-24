<?php

Route::apiResource('/quotes', 'QuotesController');
Route::post('/quotes/install', 'InstallController');