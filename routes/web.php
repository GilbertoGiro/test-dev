<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Routes about test-mysql query (Result)
|--------------------------------------------------------------------------
*/
Route::get('/query', 'QueryController@index')->name('query.index');

/*
|--------------------------------------------------------------------------
| Routes about Tickets
|--------------------------------------------------------------------------
*/
Route::get('/tickets', 'TicketController@index')->name('ticket.index');
Route::get('/tickets/cadastrar', 'TicketController@create')->name('ticket.create');
Route::post('/tickets/cadastrar', 'TicketController@store');
Route::get('/tickets/{alias}', 'TicketController@show')->name('ticket.show');