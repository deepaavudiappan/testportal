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

Route::get('/content/projects/load', [
	'as'			=>	'conProjectload',
	'uses'			=>	'projects\ProjectsController@projectsload'
	]);
Route::get('/content/projects/showdescription', [
	'as'			=>	'conShowProjDtls',
	'uses'			=>	'projects\ProjectsController@ProjDesc'
	]);
Route::get('/content/projects', [
	'as'			=>	'conProject',
	'uses'			=>	'projects\ProjectsController@projects'
	]);