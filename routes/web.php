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
// 図書一覧の表示
Route::get("library/index", "libraryController@index");
//貸し出しフォーム
Route::get("library/borrow", "libraryController@borrowingForm");
//貸し出しフォーム
Route::post("borrow", "libraryController@borrow");
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');