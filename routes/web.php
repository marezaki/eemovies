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
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('review', 'Admin\ReviewController@index');

    Route::get('movie/create', 'Admin\MovieController@add');
    Route::get('movie/create', 'Admin\MovieController@create');
    Route::get('movie/edit', 'Admin\MovieController@edit');
    // Route::get('movie/delete', 'Admin\MovieController@delete');
    // Route::get('movie/update', 'Admin\MovieController@update');
    Route::get('movie/index', 'Admin\MovieController@index');
});

// ユーザーサイド　のちにAPI認証した場合のみ見られるようにする
Route::group(['prefix' => 'admin'], function() {
    Route::get('user/login', 'Auth\TwitterController@add');
    
    Route::get('review/create', 'Admin\ReviewController@add');
    Route::post('review/create', 'Admin\ReviewController@create');
    Route::get('review', 'Admin\ReviewController@show');
    // Route::get('review/delete', 'Admin\ReviewController@delete');
    // Route::get('review/status', 'Admin\ReviewController@status');
    
    Route::get('mypage', 'Admin\ProfileController@index');
    Route::get('mypage/myreview', 'Admin\ProfileController@show');
    Route::get('mypage/edit', 'Admin\ProfileController@edit');
    // Route::get('mypage/update', 'Admin\ProfileController@update');
    Route::get('people/status', 'Admin\ProfileController@status');
    
    Route::get('movie', 'Admin\MovieController@show');
    Route::get('movie/status', 'Admin\MovieController@status');
});

// ログインURL
Route::get('auth/twitter', 'Auth\TwitterController@redirectToProvider');
// // コールバックURL
Route::get('auth/twitter/callback', 'Auth\TwitterController@handleProviderCallback');
// // ログアウトURL
Route::get('auth/twitter/logout', 'Auth\TwitterController@logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


