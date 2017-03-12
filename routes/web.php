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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/quick/step1', 'QuickController@step1');
Route::get('/quick/step2', 'QuickController@step2');
Route::get('/quick/step3', 'QuickController@step3');


Route::post('/quick/step1', ['uses' => 'QuickController@saveStep1', 'as' => 'save_step1' ]);
Route::post('/quick/step2', ['uses' => 'QuickController@saveStep2', 'as' => 'save_step2' ]);
Route::post('/quick/step3', ['uses' => 'QuickController@saveStep3', 'as' => 'save_step3' ]);



Route::get('/logout', [ 'uses' => 'Auth\LogoutController@logout', 'as' => 'logout' ]);
