<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('adminindex');
Route::get('/admin/user', 'UserController@index')->name('userindex');
Route::get('/admin/edituser/{id}', 'UserController@edit')->name('edituser');
Route::post('/admin/edituser/{id}', 'UserController@update')->name('updateuser');
Route::get('/admin/type', 'TypeController@index')->name('typeindex');
Route::get('/admin/addtype', 'TypeController@create')->name('createtype');
Route::post('/admin/type', 'TypeController@store')->name('storetype');
Route::get('/admin/edittype/{id}', 'TypeController@edit')->name('edittype');
Route::post('/admin/type/{id}', 'TypeController@update')->name('updatetype');
Route::get('/admin/product', 'ProductController@index')->name('productindex');
Route::get('/showproduct{id}', 'ProductController@show')->name('showproduct');
Route::get('/admin/addproduct', 'ProductController@create')->name('createproduct');
Route::post('/admin/product', 'ProductController@store')->name('storeproduct');
Route::get('/admin/editproduct/{id}', 'ProductController@edit')->name('editproduct');
Route::post('/admin/editproduct/{id}', 'ProductController@update')->name('updateproduct');
Route::get('/admin/provider', 'ProviderController@index')->name('providerindex');
Route::get('/admin/addprovider', 'ProviderController@create')->name('createprovider');
Route::get('/admin/editprovider/{id}', 'ProviderController@edit')->name('editprovider');
Route::post('/admin/editprovider/{id}', 'ProviderController@update')->name('updateprovider');
Route::post('/admin/provider', 'ProviderController@store')->name('storeprovider');
Route::post('/deleteprovider', 'ProviderController@destroy')->name('deleteprovider');
Route::post('/deletetype', 'TypeController@destroy')->name('deletetype');
Route::post('/deleteproduct', 'ProductController@destroy')->name('deleteproduct');
Route::post('/deleteuser', 'UserController@destroy')->name('deleteuser');
Route::get('/admin/adduser', 'UserController@create')->name('createuser');
Route::post('/admin/user', 'UserController@store')->name('storeuser');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/admin/bill', 'BillController@index')->name('billindex');
Route::get('/sub', 'SubController@index')->name('subindex');
Route::get('/sub1', 'Sub1Controller@index')->name('sub1index');
Route::get('/sub2', 'Sub2Controller@index')->name('sub2index');
Route::get('/admin/addbill', 'BillController@create')->name('createbill');
Route::post('/admin/bill', 'BillController@store')->name('storebill');
Route::get('/collect', 'CollectController@index')->name('collect');




