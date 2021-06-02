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

Route::get('/','SiteController@index');

Route::namespace('Admin')->middleware('auth')->name('admin.')->prefix('l-admin')->group(function (){

    Route::get('/', function(){
        return view('admin.home');
    });

    Route::get('/pay', 'PayController@index');

});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
