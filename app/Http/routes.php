<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('email.signature');
});

Route::get('/help', function () {
    return view('welcome');
});
*/


Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('htmlsig_index');
});

Route::get('/help', function () {
    return view('index');
});

Route::get('/listAllInstructions', 'InstructionEmailController@index');
Route::get('/viewMethod/{signature_name}', 'InstructionEmailController@detailView');

Route::group(['prefix' => 'api/v1'], function() {    
    Route::get('todos/active', 'TodoController@getAllActiveTodos');
    Route::get('todos/completed', 'TodoController@getAllCompletedTodos');
    Route::resource('todos', 'TodoController');
});