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

Route::group([], function (){

    Route::match(['get','post'], '/','IndexController@index')->name('home');


    Route::auth();

});

Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){

    Route::get('/', 'HomeController@index')->name('admin');
    Route::group(['prefix'=>'pages'], function (){

        Route::get('/', 'PagesController@index')->name('pages');
        Route::match(['get','post'], '/add','PagesController@add' )->name('pageAdd');
        Route::match(['get','post','delete'], '/edit/{page}','PagesController@edit' )->name('pageEdit');

    });
    Route::group(['prefix'=>'portfolio'], function (){

        Route::get('/', 'PortfolioController@index')->name('portfolio');
        Route::match(['get','post'], '/add','PortfolioController@add' )->name('portfolioAdd');
        Route::match(['get','post','delete'], '/edit/{portfolio}','PortfolioController@edit' )->name('portfolioEdit');

    });
    Route::group(['prefix'=>'peoples'], function (){

        Route::get('/', 'PeopleController@index')->name('peoples');
        Route::match(['get','post'], '/add','PeopleController@add' )->name('peopleAdd');
        Route::match(['get','post','delete'], '/edit/{people}','PeopleController@edit' )->name('peopleEdit');

    });
    Route::group(['prefix'=>'prices'], function (){

        Route::get('/', 'PricesController@index')->name('prices');
        Route::match(['get','post'], '/add','PricesController@add' )->name('priceAdd');
        Route::match(['get','post','delete'], '/edit/{price}','PricesController@edit' )->name('priceEdit');

    });
    Route::group(['prefix'=>'users'], function (){

        Route::get('/', 'UsersController@index')->name('users');
        Route::match(['get','post'], '/add','UsersController@add' )->name('userAdd');
        Route::match(['get','post','delete'], '/edit/{user}','UsersController@edit' )->name('userEdit');

    });

} );
Auth::routes();

Route::get('/home', 'HomeController@index');
