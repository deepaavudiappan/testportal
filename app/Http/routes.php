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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/content', [
	'as'			=>	'conIndex',
	'uses'			=>	'Content\TalksController@index'
	]);

/********* Talks ***********/
Route::get('/content/talksload', [
	'as'			=>	'conTalkBase',
	'uses'			=>	'Content\TalksController@talks_base'
	]);
Route::get('/content/talks', [
	'as'			=>	'conTalk',
	'uses'			=>	'Content\TalksController@talks'
	]);
Route::get('/content/talk_series',[
	'as'			=>	'conTalkSeries',
	'uses'			=>	'Content\TalksController@talk_series'
	]);
