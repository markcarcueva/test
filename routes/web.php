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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('home','homeController');

Route::get('/dashboard', ['as'=>'dashboard','uses' => 'dashboardController@index']);


Route::get('/register', 'homeController@signupShow');

Route::get('/login', 'homeController@loginShow');
Route::post('/bookSubmit', 'bookController@bookSubmit');


Route::post('/signup', 'homeController@signup');
Route::post('/login', 'homeController@login');