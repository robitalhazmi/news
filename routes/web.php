<?php
//getPage
Route::get('/', 'LandingController@getLanding')->name('landing');
Route::get('news', 'LandingController@getNews');
Route::get('login', 'LoginController@getLogin')->name('login')->middleware('guest');
Route::get('logout', 'LoginController@getLogout')->name('logout');
Route::get('dashboard', 'User\DashboardController@getDashboard')->name('user.dashboard');
Route::get('mynews', 'User\DashboardController@getMyNews')->name('user.mynews');
Route::get('banner/{filename}', 'LandingController@getBanner')->name('banner');
//postData
Route::post('login', 'LoginController@postLogin')->name('login.post')->middleware('guest');
Route::post('addNews', 'User\DashboardController@addNews')->name('addNews');
Route::post('imageNews', 'User\DashboardController@imageNews')->name('newsImage');

//Admin
Route::group(['prefix' => 'admin'], function () {

  Route::get('master-category', 'Admin\AdminController@getCategory')->name('admin.category');
  Route::get('master-news', 'Admin\AdminController@getNews')->name('admin.news');
  Route::get('master-user', 'Admin\AdminController@getUser')->name('admin.user');
  Route::get('master-breaking', 'Admin\AdminController@getBreaking')->name('admin.breaking');
  Route::get('master-banner', 'Admin\AdminController@getBanner')->name('admin.banner');

  Route::post('addCategory', 'Admin\AdminController@addCategory')->name('admin.addCategory');
  Route::post('addUser', 'Admin\AdminController@addUser')->name('admin.addUser');
  Route::post('addBreaking', 'Admin\AdminController@addBreaking')->name('admin.addBreaking');
  Route::post('addBanner', 'Admin\AdminController@addBanner')->name('admin.addBanner');
});
