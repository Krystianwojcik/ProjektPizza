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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/{city}/{name}/', 'PizzeriaController@index')->name('pizzeria');
Route::get('/panelkucharza', 'HomeController@panelKucharza')->name('panelkucharza');
Route::get('/editos/{id}/', 'HomeController@editos')->name('editos');

Route::post('/order/', 'OrderController@index')->name('order');
Route::post('/thankyou/', 'OrderController@thankyou')->name('thankyou');


