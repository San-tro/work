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

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/',function (){return view('');});
Route::get('/addorg',function (){return view('addOrg');});
Route::get('/addtendor',function (){return view('addTendor');});
Route::get('/form',function (){return view('form');});
Route::get('/organization',function (){return view('organization');});
Route::get('/resume',function (){return view('resume');});
Route::get('/tenders',function (){return view('tenders');});
Route::get('/user',function (){return view('user');});

