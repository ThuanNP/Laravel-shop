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

Route::get('trang-chu.html', [
		'as'=>'trang-chu',
		'uses'=>'PageController@getIndex'
]);

Route::get('loai-san-pham.html', [
		'as'=>'loai_san_pham',
		'uses'=>'PageController@getProductCategory'
]);

Route::get('chi-tiet-san-pham.html', [
		'as'=>'chi_tiet_san_pham',
		'uses'=>'PageController@getProduct'
]);

Route::get('lien-he.html', [
		'as'=>'lien_he',
		'uses'=>'PageController@getContact'
]);

Route::get('gioi-thieu.html', [
		'as'=>'gioi_thieu',
		'uses'=>'PageController@getAbout'
]);
