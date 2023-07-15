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

Route::get('/home', 'HomeController@index');
Route::get('/foods', 'HomeController@food');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/forgot_password','Auth\ForgotPasswordController@forgot');
Route::post('/forgot_password','Auth\ForgotPasswordController@password');
Auth::routes();


Route::group(['middleware' => ['auth', 'admin']], function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
    Route::get('/role-register','Admin\DashboardController@registered');
    Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');
    Route::post('/new-chef','Admin\DashboardController@addchef' );
    Route::get('/menu-history','Admin\DashboardController@menuhistory');
    Route::get('/order-history','Admin\DashboardController@orderhistory');
    
});


Route::group(['middleware' => ['auth', 'chef']], function(){

    Route::get('/menu', function () {
        return view('chef.menu');
    });
    Route::post('/addmenu','Chef\MenuController@store');
    Route::get('/foods','Chef\MenuController@view');
    Route::delete('/food-delete/{id}','Chef\MenuController@fooddelete');
    Route::get('/orderemployee','Chef\MenuController@orderemployee');
    Route::delete('/order-complete/{id}','Chef\MenuController@ordercomplete');
});

Route::group(['middleware' => ['auth', 'employee']], function(){
    Route::get('/homepage', function () {
        return view('home.homepage');
    });
    Route::get('/today-menu','Employee\OrderController@list');
    Route::post('/food-order/{id}','Employee\OrderController@order');
    Route::post('/order-placed', 'Employee\OrderController@orderPlaced');
    Route::get('/today-my-order','Employee\OrderController@myorder');
});


Route::get('/change-password','Auth\ChangePasswordController@index')->name('password.change');