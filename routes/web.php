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

Auth::routes();

Route::get('/main', 'HomeController@index')->name('main');
// Route::get('test', function(){
//     return view('mainTemplate');
// });

Route::group(['prefix'=> 'admin', 'middleware'=>['auth', 'admin']], function(){
    Route::get('admin', function() {
        return view('admin.admin');
    });
});

Route::get('article', 'ArticlesController@showArticles')->name('articles');
//Route::group(['prefix'=> 'article', 'middleware'=>['auth']], function(){
Route::get('article/{id}', 'ArticlesController@singleArticle')->name('show');
Route::get('article/create', 'ArticlesController@createArticles')->name('createArticle');
Route::post('article', 'ArticlesController@store');
Route::get('article/{id}/edit', 'ArticlesController@editArticle')->name('editArticle');
Route::put('article/{id}', 'ArticlesController@update');
Route::delete('article/{id}', 'ArticlesController@deleteArticle')->name('deleteArticle');
//});