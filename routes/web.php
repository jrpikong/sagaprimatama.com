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

Route::get('/','HomeController@index')->name('home');

Route::get('/portfolio','PortfolioController@index')->name('portfolio');
Route::get('/portfolio/{id}','PortfolioController@show')->name('portfolioShow');
Route::get('/about-us','AboutController@index')->name('aboutus');
Route::get('/contact-us','ContactUsController@index')->name('contactus');
Route::post('/contact-us','ContactUsController@store')->name('postContact');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
