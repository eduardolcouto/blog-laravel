<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', ['middleware' => 'auth',function () {
    return view('welcome',['log_acessos' => Auth::User()->log_acessos->all() ]);
}]);

Route::get('posts','PostsController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function(){

	Route::group(['prefix' => 'posts'],function(){
		Route::get('/',['as'=>'admin.posts.index','uses'=>'PostAdminController@index']);

   		Route::get('create',['as'=>'admin.posts.create','uses'=>'PostAdminController@create']);
   		Route::post('store',['as'=>'admin.posts.store','uses'=>'PostAdminController@store']);

   		Route::get('edit/{id}',['as'=>'admin.posts.edit','uses'=>'PostAdminController@edit']);
   		Route::put('update/{id}',['as'=>'admin.posts.update','uses'=>'PostAdminController@update']);
   		
   		Route::get('delete/{id}',['as'=>'admin.posts.delete','uses'=>'PostAdminController@delete']);
   		Route::post('destroy/{id}',['as'=>'admin.posts.destroy','uses'=>'PostAdminController@destroy']);

	});
});

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
  ]);

