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

// Route::get('/', function () {
//     return view('backend.homepage.home');
// });
Route::group(['middleware'=>['web'] ,'prefix'=>''],function(){
Route::get('/','frontend\HomeController@home');
Route::get('/news','frontend\NewsController@news');
Route::get('/about','frontend\AboutController@about');
Route::get('/contact','frontend\ContactController@contact');
Route::get('/gallary','frontend\GallaryController@gallary');
Route::get('/career','frontend\CareerController@career');


});






Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware'=>['auth'],'prefix'=>'admin'],function(){
	Route::Resource('/','backend\homecontroller');
	Route::Resource('/about','backend\aboutcontroller');
	Route::Resource('/news','backend\newscontroller');
	Route::Resource('/career','backend\careercontroller');
	Route::Resource('/slider','backend\slidercontroller');
	Route::Resource('/gallery','backend\imagecontroller');
	Route::Resource('/testi','backend\testicontroller');

});
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
