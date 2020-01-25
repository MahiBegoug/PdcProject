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
    return view('auth.login');
});

Auth::routes();

/*Route::get('/home',function(){
    return view('')
})*/

Route::group(['middleware' => ['auth','admin']],function(){

    Route::get('/dashboardAdmin', 'AdminControllers\AdminDashboardController@index');

    Route::get('/notions', 'NotionController@index');

    Route::get('/createnotion','NotionController@create');

    Route::post('/storenotion','NotionController@store');

});
