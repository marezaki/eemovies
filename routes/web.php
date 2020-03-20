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

// 管理者サイド
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('review/index', 'Admin\ReviewController@index');
    Route::get('review/delete', 'Admin\ReviewController@delete');
    Route::get('review/status', 'Admin\ReviewController@status');

    Route::get('movie/create', 'Admin\MovieController@add');
    Route::post('movie/create', 'Admin\MovieController@create');
    Route::get('movie/edit', 'Admin\MovieController@edit');
    Route::post('movie/edit', 'Admin\MovieController@update');
    Route::get('movie/delete', 'Admin\MovieController@delete');
    Route::get('movie/index', 'Admin\MovieController@index');
});

// ユーザーサイド
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('review/create', 'User\ReviewController@add');
    Route::post('review/create', 'User\ReviewController@create');
    Route::get('review', 'User\ReviewController@index');
    Route::get('myreview/delete', 'User\ReviewController@delete');
    Route::get('myreview', 'User\ReviewController@mine');
    Route::get('review/status', 'User\ReviewController@status');

    Route::get('mypage', 'User\UserController@index');
    Route::get('about', 'User\UserController@about');

    Route::get('movie', 'User\MovieController@index');
    Route::get('movie/status', 'User\MovieController@status');
});

// ゲストユーザー
Route::get('about', 'Guest\GuestController@about');
Route::get('review', 'Guest\ReviewController@index');
Route::get('review/status', 'Guest\ReviewController@status');
Route::get('movie', 'Guest\MovieController@index');
Route::get('movie/status', 'Guest\MovieController@status');
Route::get('twitter/login', 'Guest\GuestController@login');

// Twitter API OAuth認証
// ログインURL
Route::get('/auth/twitter', 'Auth\TwitterController@redirectToProvider')->name("twitter.login");
// // コールバックURL
Route::get('/auth/twitter/callback', 'Auth\TwitterController@handleProviderCallback');
// // ログアウトURL
Route::get('/auth/twitter/logout', 'Auth\TwitterController@logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
