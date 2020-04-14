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

include('RouteAdmin.php');
Route::get('/','HomeController@index')->name('home');
Route::group(['namespace'=>'Auth'],function()
{
    Route::get('dang-ky','RegisterController@getRegister')->name('get.register');
    Route::post('dang-ky','RegisterController@postRegister');
    Route::get('dang-nhap','LoginController@getLogin')->name('get.login');
    Route::post('dang-nhap','LoginController@postLogin');
    Route::get('dang-xuat','LoginController@getLogout')->name('get.logout');
});

Route::group(['prefix'=>'shopping'],function()
{
    Route::get('/','ShoppingCartController@index')->name('shopping.cart.index');
    Route::get('add/{id}','ShoppingCartController@addProduct')->name('shopping.add.product');
    Route::get('/delete/{key}','ShoppingCartController@deleteProductItem')->name('shopping.delete.product');
});

Route::group(['prefix'=>'feature-user','middleware'=>'checkLoginUser'],function()
{
    Route::get('/checkout','FeatureUserController@getFormPay')->name('feature.user.checkout');
    Route::post('/checkout','FeatureUserController@saveInfoShoppingCart');
});