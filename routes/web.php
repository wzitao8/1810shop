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
//首页
Route::get('/index', 'Index\IndexController@index');

Route::get('/login', 'Login\LoginController@login');//登陆

Route::get('/login/reg', 'Login\RegController@reg');//注册
Route::post('/regadd', 'Login\RegController@regadd');//注册执行

Route::get('/goods/productlist', 'Goods\GoodsController@goodslist');//列表页

Route::get('/goodsInfo/{id}', 'Goods\GoodsController@goodsInfo');//列表页

Route::get('/wishlist', 'Goods\GoodsController@wishlist');//列表页


Route::get('/cart', 'Cart\CartController@cart');//购物车
Route::post('/cart', 'Cart\CartController@cart');//购物车