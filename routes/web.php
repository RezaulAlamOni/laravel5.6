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

use App\Http\Middleware\Admin;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/role',function (){
    $user=User::find(8);
        if($user->isAdmin()){
         return "Yore areaa asdmin";
        }
        return 'yiu are inot';
});


//Route::group(['middleware'=>'admin'],function (){
//Route::group(['middleware'=>Admin::class],function (){

    Route::resource('/admin/user','AdminUsersController');
    Route::get('/admin','AdminUsersController@dashboard')->name('admin.dashboard');
    Route::get('/admin/users','AdminUsersController@index')->name('admin.users');
//    Route::post('/admin/user/create','AdminUsersController@store')->name('user.store');
    Route::get('/admin/user/create','AdminUsersController@create')->name('admin.user.create');
    Route::get('/admin/user/edit/{id}','AdminUsersController@edit')->name('admin.user.edit');
    Route::PATCH('/admin/user/update/{id}','AdminUsersController@update')->name('admin.user.update');
//    Route::delete('/admin/user/delete/{id}','AdminUsersController@destroy')->name('admin.user.delete');
//});