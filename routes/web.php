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
    return view('welcome', ['name' => 'login']);
});

/*Route::group(['namespace' => 'Teacher'], function() {
    Route::get('/info', 'Controller\TeacherInfoController@getAllTeachers')->middleware('check');
});*/





//Route::get('teacher/{name}', 'ClassController@index');

// 1
/*Route::group(['namespace' => 'Teacher', 'prefix' => 't'], function() {
    Route::get('/teacher', 'ClassController@index');
});*/

// 2
/*Route::prefix('t')->group(function () {
    Route::get('/teacher',  'Teacher\ClassController@index');
});*/

/*Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::get('/register', 'Auth\RegisterController@index')->name('register');*/
