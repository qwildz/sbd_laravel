<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('mail', function()
{
	Mail::send('hello', array(), function($message)
	{
		$message->from('no-reply@packerplan.me', 'PackerPlan');
		$message->to('resnarizki29@gmail.com');
	});
});

Route::post('inboundmail', function()
{
	$data = Input::get('mandrill_events');
	File::append('test.txt', $data);
});