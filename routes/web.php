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
    return view('users.active')->with('users', \App\User::where('active_status',1)->orderBy('updated_at', 'DESC')->get());
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('information', 'AboutUsController@information')->name('information')->middleware('auth');
Route::POST('editInformation', 'AboutUsController@editInformation')->name('editInfo');

Route::get('/course', 'CourseController@index')->name('courses')->middleware('auth');
Route::POST('createCourse', 'CourseController@create')->name('createCourse');
Route::get('showCourse', 'CourseController@show')->name('showCourse')->middleware('auth');
Route::any('deleteCourse/{id}', 'CourseController@delete')->name('deleteCourse')->middleware('auth');
Route::any('editCourse/{id}', 'CourseController@edit')->name('editCourse')->middleware('auth');
Route::POST('updateCourse/{id}', 'CourseController@update')->name('updateCourse')->middleware('auth');


Route::get('/test', 'TestController@index')->name('tests')->middleware('auth');
Route::POST('createTest', 'TestController@create')->name('createTest');
Route::get('showTest', 'TestController@show')->name('showTest')->middleware('auth');
Route::any('deleteTest/{id}', 'TestController@delete')->name('deleteTest')->middleware('auth');
Route::any('editTest/{id}', 'TestController@edit')->name('editTest')->middleware('auth');
Route::POST('updateTest/{id}', 'TestController@update')->name('updateTest')->middleware('auth');

Route::get('activeusers', 'UsersController@active')->name('active');
Route::any('activate/{id}', 'UsersController@activateUser')->name('activate');
Route::get('pendingusers', 'UsersController@pending')->name('pending');
Route::any('pend/{id}', 'UsersController@pendUser')->name('pend');
