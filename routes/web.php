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
Route::get('/home', function () {
    return view('home',[
      'name' => -1,
      'user' => -1,
      'statue' => [
          'value' => 'none'
        ],
    ]);
});
Route::get('/room/{id}', 'RoomController@room');
Route::get('/live/{id}', 'RoomController@live');
Route::get('/video', 'VideoController@index');

Route::get('/person', 'StudentController@index');
Route::get('/person/update', 'StudentController@update');
Route::get('/classify', function () {
    return view('classify',[
      'name' => -1,
      'user' => -1,
      'statue' => [
          'value' => 'none'
        ],
    ]);
});
Route::get('/search', 'SearchController@search');
Route::get('/classify', 'ClassifyController@index');
Route::get('/classify/php_live', 'ClassifyController@php_live');
Route::get('/classify/java_live', 'ClassifyController@java_live');
Route::get('/classify/bigdate_live', 'ClassifyController@bigdate_live');
Route::get('/classify/html_live', 'ClassifyController@html_live');
Route::get('/classify/python_live', 'ClassifyController@python_live');
Route::get('/classify/cpp_live', 'ClassifyController@cpp_live');

Route::get('/teacheropen', function () {
    return view('teacheropen', [
      'name' => 'Victoria',
      'user' => '-1',
      'statue' => [
          'value' => 'none'
        ],
    ]);
});

Route::group(['prefix' => 'swagger'], function () {
    Route::get('json', 'SwaggerController@getJSON');
    Route::get('my-data', 'SwaggerController@getMyData');
});

Route::get('/host_board/{id}', 'RoomController@host_board');
Route::get('/logout', 'AuthController@logout');
Route::get('/joinus', 'PageController@joinus');
Route::post('/Postregister', 'AuthController@Postregister');
Route::post('/Postlogin', 'AuthController@Postlogin');
Route::post('/Postcaptcha', 'SmsController@sms_func');
