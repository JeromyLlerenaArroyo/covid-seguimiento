<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->prefix('admin')->name('admin')->namespace('Admin')->group(function(){
	Route::prefix('patients')->name('.patients')->group(function() {
		Route::get('', 'PatientController@index')->name('.index');
		//Route::post('validate', 'PatientController@validateFields')->name('.validate');
		Route::get('{patient}', 'PatientController@track')->name('.track');
		Route::get('{patient}/new-track', 'PatientController@showNewTrack')->name('.new-track');
		Route::post('{patient}/new-track', 'PatientController@newTrack')->name('.new-track');
	});
});
