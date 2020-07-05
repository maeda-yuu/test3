
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/books','TestController@bookInitial');
Route::post('/book/search','TestController@search');
Route::post('/book/insert','TestController@insert');
Route::post('/book/delete','TestController@delete');

Route::get('/search', 'TestController@index');

//Route::get('/test', 'TestController@getIndex');
//Route::get('/test/{a1}/{b1}','TestController@add');
//Route::get('/geogle','TestController@initialScreen');
//Route::post('/geogle/send','TestController@input');

