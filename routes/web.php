<?php

// Admin routes
Route::get('/admin', 'AdminController@index');
Route::post('/admin/addResponse', 'AdminController@markResponse');
Route::get('/show/{id}', 'AdminController@show');
Route::post('/show/{id}', 'AdminController@addComment');
Route::post('/addComent', 'TicketController@addComment');


// Client routes
Route::get('/', 'ExternalPagesController@front');
Route::get('/front', 'ExternalPagesController@front');
Route::get('/new', 'ExternalPagesController@new');
Route::post('/new', 'TicketController@addTicket');
Route::get('/existing', 'ExternalPagesController@existing');
Route::get('/ticket/{id}', 'ExternalPagesController@getTicket');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
