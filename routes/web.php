<?php
//getPage
Route::get('/', 'LandingController@getLanding')->name('landing');
Route::get('news', 'LandingController@getNews');
Route::get('login', 'LoginController@getLogin')->name('login')->middleware('guest');
Route::get('logout', 'LoginController@getLogout')->name('logout');
Route::get('dashboard', 'User\DashboardController@getDashboard')->name('user.dashboard');
Route::get('mynews', 'User\DashboardController@getMyNews')->name('user.mynews');
//postData
Route::post('login', 'LoginController@postLogin')->name('login.post')->middleware('guest');
Route::post('addNews', 'User\DashboardController@addNews')->name('addNews');
Route::post('imageNews', 'User\DashboardController@imageNews')->name('newsImage');

//Admin
Route::group(['prefix' => 'admin'], function () {

  Route::get('dashboard', 'Admin\AdminController@getAdmin')->name('admin.dashboard');
  Route::get('news', 'Admin\AdminController@getNews')->name('admin.news');

  Route::post('addUser', 'Admin\AdminController@addUser')->name('admin.addUser');
});
