<?php
//getPage
Route::get('/', 'LandingController@getLanding')->name('landing');
Route::get('login', 'LoginController@getLogin')->name('login');
Route::get('admin', 'AdminController@getAdmin')->name('admin');
Route::get('logout', 'LoginController@getLogout')->name('logout');
Route::get('dashboard', 'DashboardController@getDashboard')->name('dashboard');
//postData
Route::post('login', 'LoginController@postLogin')->name('login.post');
Route::post('addUser', 'AdminController@addUser')->name('addUser');
Route::post('addNews', 'DashboardController@addNews')->name('addNews');
