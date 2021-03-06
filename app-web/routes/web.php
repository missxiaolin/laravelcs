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

Route::group([], function($router){
    $router->any('home/index', 'HomeController@index')->name('home.index');
    $router->any('home/upload', 'HomeController@upload')->name('home.upload');
    $router->any('home/mail', 'HomeController@mail')->name('home.mail');
});