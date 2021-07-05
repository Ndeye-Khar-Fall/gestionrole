<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/stagiaire/login', 'StagiaireController@login')->name('stagiairelogin');
Route::get('/stagiaire/create', 'StagiaireController@create')->name('stagiairecreate');
Route::post('/stagiaire/add', 'StagiaireController@store')->name('stagiaire.store');
Route::get('/stagiaire/index', 'StagiaireController@index')->name('stagiaireindex');
Route::post('/stagiaire/login/add',  'StagiaireController@addLogin')->name('stagiaire.addLogin');


Route::get('/coach/login', 'CoachController@login')->name('coachlogin');
Route::get('/coach/create', 'CoachController@create')->name('coachcreate');
Route::post('/coach/add', 'CoachController@store')->name('coach.store');
Route::get('/coach/index', 'CoachController@index')->name('coachindex');
Route::post('/coach/login/add',  'CoachController@addLogin')->name('coach.addLogin');

Route::get('/admin/index', 'AdminControler@index')->name('admin.index');
Route::get('/admin/login', 'AdminController@login')->name('adminlogin');
Route::post('/admin/login/add',  'AdminController@addLogin')->name('admin.addLogin');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
