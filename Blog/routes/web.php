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

/* Routes */
Route::get('/', function () {
    return view('index');
});
Route::get('/home',  function () {
    return view('index');    
});
Route::get('/profile', 'MainController@userProfile');
Route::get('/menu', 'MainController@menu');
Route::get('/about', 'MainController@about');
Route::get('/create', 'MainController@create');
Route::post('/submitOrder', 'CreateController@submitOrder');
Route::get('/admin', 'MainController@admin');

Auth::routes();
?>
