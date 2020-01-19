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

Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider')->name('facebook');
Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('/', 'HomeController@home')->name('homes');
Route::get('/pizzeriaList', 'HomeController@index')->name('pizzerialist');
Route::get('/creator-pizzy/', 'CreatorController@index')->name('creator-pizzy');

Route::get('/{city}/{name}/', 'PizzeriaController@index')->name('pizzeria');
Route::get('/panel_Kucharza', 'HomeController@panelKucharza')->name('panelkucharza');
Route::get('/panel_Dostawcy', 'HomeController@panelDostawcy')->name('paneldostawcy');
Route::get('/editos/{id}/', 'HomeController@editos')->name('editos');
Route::get('/homepage', 'HomeController@home')->name('homepage');
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/register', 'HomeController@register')->name('register');
Route::get('/creator', 'HomeController@creator')->name('creator');
Route::get('/searchPizzeria', 'HomeController@searchPizzeria');
Route::post('/pizzeriasearch', 'HomeController@pizzeriasearch')->name('pizzeriasearch');
Route::post('/order/', 'OrderController@index')->name('order');
Route::post('/thankyou/', 'OrderController@thankyou')->name('thankyou');
/* Zmiana statusus zamowienia */
Route::get('/change_status_order', 'HomeController@change_status_order');
Route::post('/change_status_order', 'HomeController@change_status_order_function');
/* Creator pobranie listy pizzerii */
Route::get('/creator_get_pizzerias', 'CreatorController@creator_get_pizzerias');
Route::post('/creator_get_pizzerias', 'CreatorController@creator_get_pizzerias_function');




Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){


});
Auth::routes();
