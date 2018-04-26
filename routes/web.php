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
    return view('home',[
      'name' => -1,
      'user' => -1,
      'statue' => [
          'value' => 'none'
        ],
    ]);
});
Route::get('/', 'HomeController@search');
Route::get('/room/{id}', 'RoomController@room');
Route::get('/live/{id}', 'RoomController@live');
Route::get('/video', 'VideoController@index');


Route::get('/api/student/get_student', 'StudentController@get_student');
Route::get('/person', 'StudentController@index')->name('person');

Route::post('/person/info-update', 'StudentController@info_update')->name('s-info-update');
Route::post('/person/header-update', 'StudentController@header_update')->name('s-header-update');
Route::post('/person/email/update', 'StudentController@email_update');

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
Route::get('/classifyJson', 'ClassifyController@index_json');
Route::get('/classify/search', 'ClassifyController@search');
Route::get('/classify/searchJson', 'ClassifyController@search_json');


Route::group(['prefix' => 'swagger'], function () {
    Route::get('json', 'SwaggerController@getJSON');
    Route::get('my-data', 'SwaggerController@getMyData');
});

Route::get('/host_board/{id}', 'RoomController@host_board');
Route::get('/logout', 'AuthController@logout');
Route::get('/joinus', 'PageController@joinus');
Route::get('/testSignal', 'TestController@test_signal');
Route::post('/Postregister', 'AuthController@Postregister');
Route::post('/Postlogin', 'AuthController@Postlogin');
Route::post('/Postcaptcha', 'SmsController@sms_func');
Route::get('/testCode', 'TestController@testCode');
Route::get('/codeReader', 'TestController@codeReader');
Route::post('/Postlive', 'TeacherOpenController@store');
