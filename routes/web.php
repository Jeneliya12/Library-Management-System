<?php

use App\Repositories\UserRepository;

use App\Services\Twitter;

use App\Events\WebsocketDemoEvent;

use App\User;
/*
Route::get('/', function(Twitter $twitter){
	dd($twitter);
	return view('welcome');
 });
 */
/*Route::get('/', function(UserRepository $users){
	dd($users);
	return view('welcome');
 });*/

// Route::get('/', function() {
// 	broadcast(new WebsocketDemoEvent('some data'));
// 	return view('welcome');
// });

Route::get('/chats', 'ChatsController@index');

Route::get('/messages', 'ChatsController@fetchMessages');

Route::post('/messages', 'ChatsController@sendMessage');

Route::get('/', function () {
    return view('welcome');
});

//books
Route::get('/searchcontent', 'BooksController@searchcontent');

Route::get('/author', 'PagesController@author');

Route::get('/', 'PagesController@home');

Route::get('/admindashboard', 'PagesController@admin');

Route::get('/bookslisted', 'PagesController@bookslisted');

Route::get('/bookissued', 'PagesController@bookissued');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::resource('books', 'BooksController');

Route::patch('/tasks/{task}', 'BookTasksController@update');

Route::post('/books/{book}/tasks', 'BookTasksController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//full calender
Route::post('/books/{book}/tasks', 'BookTasksController@store');

