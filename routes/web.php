<?php

// Admin routes
Route::get('/admin', 'HomeController@index');
Route::get('/show/{id}', 'HomeController@show');


// Client routes
Route::get('/', 'HomeController@front');
Route::get('/front', 'HomeController@front');
Route::get('/new', 'HomeController@new');
Route::post('/new', 'TicketController@addTicket');
Route::get('/existing', 'HomeController@existing');
