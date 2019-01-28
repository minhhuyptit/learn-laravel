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
Route::get('maintenance', function () {
   echo 'Xin chào mọi người';
});
Route::get('facades', function () {
    Cache::shouldReceive('get')
         ->with('key')
         ->andReturn('value');

    // $this\\->visit('/cache')
    //      ->see('value');
 });
