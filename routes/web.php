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

Route::redirect('/homestay.html', 'https://villa.loherb.com.tw');
Route::redirect('/economybed.html', 'https://villa.loherb.com.tw/rooms');
Route::redirect('/luxurybed.html', 'https://villa.loherb.com.tw/rooms');
Route::redirect('/vipbed.html', 'https://villa.loherb.com.tw/rooms');
Route::redirect('/cafe.html', 'https://cuisine.loherb.com.tw');
Route::redirect('/event.html', 'https://cuisine.loherb.com.tw/events');
Route::redirect('/menu.html', 'https://cuisine.loherb.com.tw/menu');



Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect']], function() {
    Route::view('/', 'homepage');


});
