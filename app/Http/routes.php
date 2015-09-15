<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('templates', ['as' => 'templates', 'uses' => 'TemplatesController@index']);
Route::get('banded', ['as' => 'banded', 'uses' => 'TemplatesController@banded']);
Route::get('blog', ['as' => 'blog', 'uses' => 'TemplatesController@blog']);
Route::get('feed', ['as' => 'feed', 'uses' => 'TemplatesController@feed']);
Route::get('grid', ['as' => 'grid', 'uses' => 'TemplatesController@grid']);
Route::get('orbit', ['as' => 'orbit', 'uses' => 'TemplatesController@orbit']);
Route::get('banner', ['as' => 'banner', 'uses' => 'TemplatesController@banner']);
Route::get('sidebar', ['as' => 'sidebar', 'uses' => 'TemplatesController@sidebar']);
Route::get('contact', ['as' => 'contact', 'uses' => 'TemplatesController@contact']);
Route::get('marketing', ['as' => 'marketing', 'uses' => 'TemplatesController@marketing']);
Route::get('realty', ['as' => 'realty', 'uses' => 'TemplatesController@realty']);
Route::get('soboxy', ['as' => 'soboxy', 'uses' => 'TemplatesController@soboxy']);
Route::get('store', ['as' => 'store', 'uses' => 'TemplatesController@store']);
Route::get('workspace', ['as' => 'workspace', 'uses' => 'TemplatesController@workspace']);
Route::get('marketing2', ['as' => 'marketing2', 'uses' => 'TemplatesController@marketing2']);
Route::get('product', ['as' => 'product', 'uses' => 'TemplatesController@product']);
Route::get('portfolio', ['as' => 'portfolio', 'uses' => 'TemplatesController@portfolio']);
Route::get('portfoliotheme', ['as' => 'portfoliotheme', 'uses' => 'TemplatesController@portfoliotheme']);
Route::get('dogs', ['as' => 'dogs', 'uses' => 'TemplatesController@dogs']);
