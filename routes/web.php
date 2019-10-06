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

use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/products', 'ProductsController@index')->name('productList');

Route::get('/product/form','ProductsController@getForm')->name('productForm');

Route::post('/product/form/post','ProductsController@postForm')->name('postForm');

Route::get('/product/delete/{id}','ProductsController@destroy')->name('productDelete');

Route::get('/product/form/{id}', 'ProductsController@productForm')->name('productFormUpdate');

Route::post('/product/form/update/{id}', 'ProductsController@updateData')->name('productRewrite');


Route::get('/users', 'UsersController@index')->name('userList');

Route::get('/user/form','UsersController@getForm')->name('userForm');

Route::get('/user/delete/{id}','UsersController@Destroy')->name('userDelete');

Route::post('/user/form/post','UsersController@postForm')->name('postUserForm');

Route::get('/user/form/{id}', 'UsersController@userForm')->name('UserFormUpdate');

Route::post('/user/form/update/{id}', 'UsersController@updateData')->name('UserRewrite');

Route::get('/login', 'Controller@loginForm')->name('login');

Route::get('/register/form', 'Controller@registerForm')->name('registerForm');

Route::post('/register/create', 'Controller@postRegisterForm')->name('postRegisterForm');

Route::post('/login/success', 'Controller@login')->name('userLogin');
