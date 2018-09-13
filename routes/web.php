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

Route::group(['middleware' => 'auth'] ,function(){

    Route::get('/', 'HomeController@backend')->name('home');
   Route::get('dashboard', 'HomeController@backend')->name('home');
});



Route::group(['namespace' => 'Backend','middleware' => ['auth']],  function () {
//    Users
Route::get('/users', 'UserController@show');
Route::get('/users/create', 'UserController@create');
Route::get('/users/edit', 'UserController@edit');
Route::get('/users/view', 'UserController@view');
Route::get('/users/monthlypayment', 'UserController@monthlyPayment');


//    User Accounts
Route::get('/user/accounts', 'UserController@accounts');
Route::get('/users/create', 'UserController@create');
Route::get('/users/edit', 'UserController@edit');
Route::get('/users/view', 'UserController@view');

});
