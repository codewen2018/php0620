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

Route::get("article/index","ArticleController@index")->name("article.index");
Route::any("article/add","ArticleController@add")->name("article.add");
Route::any("article/edit/{id}","ArticleController@edit")->name("article.edit");
Route::get("article/del/{id}","ArticleController@del")->name("article.del");

Route::get("user/index","UserController@index")->name("user.index");