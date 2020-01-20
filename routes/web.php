<?php

Route::get('/', 'PagesController@index'); // wait ke request ey vea call yk mk use
Route::get('/about', 'PagesController@about');
Route::get('/sport', 'PagesController@sport');