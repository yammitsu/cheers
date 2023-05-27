<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// カクテル検索
Route::get('/cocktails',function(){
    return view('cocktails');
})->name('cocktails');
// カクテル検索結果
Route::get('/search','App\Http\Controllers\CocktailController@search');
// カクテル詳細
Route::get('/detail','App\Http\Controllers\CocktailController@detail');


// 投稿一覧を表示する
Route::get('/timeline', 'App\Http\Controllers\PostController@index')->name('posts.index');
// 投稿フォームを表示する
Route::get('/create', 'App\Http\Controllers\PostController@create')->name('posts.create');
// 投稿を保存する
Route::post('/', 'App\Http\Controllers\PostController@store')->name('posts.store');
// 投稿を表示する
Route::get('/{id}', 'App\Http\Controllers\PostController@show')->name('posts.show');
// 投稿を削除する
Route::delete('/{id}', 'App\Http\Controllers\PostController@destroy')->name('posts.destroy');
// 投稿を編集するフォームを表示する
Route::post('/{id}/edit', 'App\Http\Controllers\PostController@edit')->name('posts.edit');
// 投稿を更新する
Route::put('/{id}', 'App\Http\Controllers\PostController@update')->name('posts.update');