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

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'lailelaodi','namespace' => 'Admin'],function ()
{
    Route::any('login', 'LoginController@login');
    Route::any('logout', 'LoginController@logout');
    Route::group(['middleware' => 'admin.login'],function (){
        Route::get('/', 'IndexController@index');
        Route::get('index', 'IndexController@index');
    });
}
);
Route::group(['namespace' => 'Home'],function (){
    Route::get('index', 'IndexController@index')->name('home');
    Route::get('/', 'IndexController@index')->name('home');
});

