<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('/home', array('as' => 'home', 'uses' => 'HomeController@index'));

Route::group(['prefix' => 'product'], function () {

    Route::get('/', array('as' => 'product', 'uses' => 'ProductController@index'));
    Route::get('/{product_id}', array('as' => 'productdetail', 'uses' => 'ProductController@getdetail'));

    Route::get('/hajj', function () {
        return view('product.index');
    });
    Route::get('/about', function () {
        return view('product.about');
    });
});

Route::get('/logout', array('as' => 'logout', 'uses' => 'Auth\LoginController@logout'));

Route::group(['prefix' => 'account'], function () {
    Route::get('/', array('as' => 'account', 'uses' => 'AccountController@index'));
    Route::get('/logout', 'AccountController@getLogout');

    Route::get('/login', 'AccountController@getLogin');
    Route::post('/login', 'AccountController@postLogin');

    Route::get('/register', 'AccountController@getRegister');
    Route::post('/register', 'AccountController@postRegister');
});

Route::group(['prefix' => 'account', 'middleware' => ['check']], function () {
    // only admin can access this section
    Route::group(['middleware' => 'admin'], function () {
        Route::get('users', function () {
            return view('admin/users');
        });
    });
});



//Route::group(['prefix' => 'cart'], function () {
//
//    Route::get('/', array('as' => 'product', 'uses' => 'CartController@index'));
//});

Route::resource('cart', 'CartController');