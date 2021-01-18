<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibController;

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

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/','LibController@index');
Route::get('/list','LibController@list');
Route::view('/add','add');
Route::post('/add','LibController@add');
Route::get('/delete/{id}','LibController@delete');
Route::get('/edit/{id}','LibController@edit');
Route::post('edit','LibController@update');
Route::post('/list','LibController@list');


Route::get('/showRegisterView','UserController@showRegisterView');
Route::post('/doRegister','UserController@doRegister');
Route::get('/redirectLogin','UserController@redirectLogin');
Route::get('/showUserList','UserController@showUserList');
Route::get('/deleteUser/{id}','UserController@deleteUser');

/*
Route for index
*/
Route::get('/index','LibController@index');
Route::post('/index','LibController@index');