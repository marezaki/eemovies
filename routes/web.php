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

// Route::get('/', function () {
//     return view('welcome');
// });

// 管理者サイド
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('movie/create', 'Admin\MovieController@add');
    Route::post('movie/create', 'Admin\MovieController@create');
    Route::get('movie/edit', 'Admin\MovieController@edit');
    Route::post('movie/edit', 'Admin\MovieController@update');
    Route::get('movie/delete', 'Admin\MovieController@delete');
    Route::get('movie/index', 'Admin\MovieController@index');
});

// ユーザーサイド
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('/', 'User\UserController@about');
    Route::get('review/create', 'User\ReviewController@add');
    Route::post('review/create', 'User\ReviewController@create');
    Route::get('review', 'User\ReviewController@index');
    Route::get('review/status', 'User\ReviewController@status');
    Route::get('myreview/delete', 'User\ReviewController@delete');

    Route::get('mypage', 'User\UserController@index');
    Route::get('mypage/edit', 'User\UserController@edit');
    Route::post('mypage/edit', 'User\UserController@update');

    Route::get('movie', 'User\MovieController@index');
    Route::get('movie/status', 'User\MovieController@status');

    Route::get('demand/create', 'User\DemandController@add');
    Route::post('demand/create', 'User\DemandController@create');
    Route::get('demands', 'User\DemandController@index');
    Route::get('demand/delete', 'User\DemandController@delete');

    Route::get('favorite', 'FavoriteController@store')->name('favorites.favorite');
    Route::get('unfavorite', 'FavoriteController@destroy')->name('favorites.unfavorite');
});

// ゲストユーザー
Route::get('/', 'Guest\GuestController@about');
Route::get('review', 'Guest\ReviewController@index');
Route::get('review/status', 'Guest\ReviewController@status');
Route::get('movie', 'Guest\MovieController@index');
Route::get('movie/status', 'Guest\MovieController@status');
Route::get('user/login', 'Guest\GuestController@login');
Route::get('user/register', 'Guest\GuestController@register');

// Twitter API OAuth認証
// ログインURL
Route::get('/auth/twitter', 'Auth\TwitterController@redirectToProvider')->name("twitter.login");
// // コールバックURL
Route::get('/auth/twitter/callback', 'Auth\TwitterController@handleProviderCallback');
// // ログアウトURL
Route::get('/auth/twitter/logout', 'Auth\TwitterController@logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
