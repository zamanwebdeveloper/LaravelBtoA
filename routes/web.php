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
    return view('index');
});
Route::get('/services', 'pageController@services');
Route::get('/features', 'pageController@features');
Route::get('/works', 'pageController@portfolios');
Route::get('/pricing', 'pageController@pricing');
Route::get('/team', 'pageController@team');
Route::get('/subscribe', 'pageController@subscribe');
Route::get('/blog', 'pageController@blog');
Route::get('/contact', 'pageController@contact');

