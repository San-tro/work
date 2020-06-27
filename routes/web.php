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

use App\Resumes;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/',function (){return view('');});
Route::get('/addorg',function (){return view('addOrg');});
Route::get('/CreateTendor',function (){return view('CreateTendor');});
Route::get('/form',function (){return view('form');});
Route::get('/organization',function (){return view('organization');});
Route::get('/resume',function (){return view('resume');});
Route::get('/tenders',function (){return view('tenders');});
Route::get('/user',function (){return view('user');});
Route::get('/CreateResume',function (){return view('CreateResume');})->name('CreateResume');
Route::get('/addvacancy',function (){return view('addVacancy');});
Route::get('/allResume',function (){$resume = Resumes::all();
    return view('allResume',compact('resume'));});

Route::resource('vacancy','VacancyController');
Route::resource('tenders','TenderController');
Route::resource('user','UserController');



