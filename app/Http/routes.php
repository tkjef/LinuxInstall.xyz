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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/submit-ticket', 'TicketsController@create');
Route::post('/submit-ticket', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit', 'TicketsController@edit');
Route::post('/ticket/{slug?}/edit', 'TicketsController@update');
Route::post('/ticket/{slug?}/delete', 'TicketsController@destroy');
Route::get('sendemail', function () {
	$data = array(
		'name' => "LinuxInstall.xyz",
	);

	Mail::send('emails.welcome', $data, function ($message) {

		$message->from('yotkjef@gmail.com', 'LinuxInstall.xyz');

		$message->to('yo@tkjef.com')->subject('LinuxInstall.xyz Ticket Submission');

	});

	return "Your ticket has been submitted successfully.";

});
