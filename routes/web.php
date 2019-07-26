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

Route::get('/', function (){
    return view('welcome');
});
// Route::get('/','AdminController@admin');
   


Route::get('/main','AllController@index');
Route::get('/action','AllController@action');
Route::get('/ghost','AllController@ghost');
Route::get('/funny','AllController@funny');
Route::get('/search','AllController@search');
Route::get('/drama','AllController@drama');
Route::get('playmovie/{id}','AllController@playmovie');
Route::get('/about','AllController@about');
Route::get('/frontend/showall/{id}','AllController@showall');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('backend', 'AdminController');
Route::resource('addcategory', 'AddCategory');