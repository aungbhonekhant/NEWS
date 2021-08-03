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
    return view('welcome');
});




// Admin route

Route:: group(['namespace'=>'admin','middleware'=> 'auth',"prefix"=>'admin'],function(){
  
	Route::get('home','DashboardController@index')->name('dashboard.index');
    Route::get('home/chart','DashboardController@chart')->name('dashboard.chart');
    Route::resource('title','titleController')->middleware('can:posts.title');
    Route::resource('menu','MenuController')->middleware('can:posts.menu');
    Route::resource('post','PostController');
    Route::resource('role','RoleController')->middleware('can:users.role');
    Route::resource('user','UserController');
    Route::resource('permission','PermissionController')->middleware('can:users.permission');
    Route::get('filemanager', 'FilemanagerController@index')->name('filemanager.index')->middleware('can:posts.filemanager');
	Route::get('user-message', 'MessageController@index')->name('message.index');
    Route::get('view-message/{id}', 'MessageController@view')->name('message.view');
    ;

});

// user route

Route:: group(['namespace'=>'user'],function(){
  
    
    Route::get('/','HomeController@index')->name('home.index');
    Route::get('/blog/{menu}','HomeController@menu')->name('home.menu');
    Route::get('/post/{id}','HomeController@post')->name('home.post');
    Route::get('/title/{title}','HomeController@title')->name('home.title');
    Route::get('search','SearchController@search')->name('search');
    Route::resource('/contact','ContactController');


 
});


//error
Route::get('/errorpage', function () {
    return view('errorpage');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


