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

use Illuminate\Database\Eloquest\Model;

Route::get('/', function () {
    return view('welcome');

});

Route::group(['middleware' => ['web']], function() {
  Route::get('/', 'OperationController@index');
  Route::resource('operation', 'OperationController', ['only' => ['index','store'] ]);
  Route::post('/operation/{id}/delete', 'OperationController@destroy');
});
