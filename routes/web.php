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

use App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin',function (){
    return view('admin\index');
});
Route::get('/role',function (){
    $user=User::find(2);
    return $user->role->name;
});

//Route::resource('/admin/user','AdminUsersController');
Route::get('/admin/user','AdminUsersController@index');
Route::post('/admin/user/create','AdminUsersController@store')->name('user.store');
Route::get('/admin/user/create','AdminUsersController@create')->name('user.create');
