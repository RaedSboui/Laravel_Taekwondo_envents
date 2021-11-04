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

Auth::routes();


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/admin','App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','App\Http\Controllers\Admin\LoginController@login');
Route::post('admin/logout', 'App\Http\Controllers\Admin\LoginController@logout')->name('admin.logout');
Route::get('admin/home','App\Http\Controllers\AdminController@index')->name('admin.home')->middleware('auth:admin');
Route::resource('events','App\Http\Controllers\EventController')->middleware('auth:admin');
Route::post('eventDelete/{id}', 'App\Http\Controllers\EventController@eventDelete')->name('event.delete')->middleware('auth:admin');
Route::get('eventEdit/{id}/edit', 'App\Http\Controllers\EventController@eventEdit')->name('event.edit')->middleware('auth:admin');
Route::get('eventShow/{id}', 'App\Http\Controllers\EventController@eventShow')->name('event.show')->middleware('auth:admin');


Route::resource('players','App\Http\Controllers\PlayerController')->middleware('auth');
Route::post('Playerdelete/{id}', 'App\Http\Controllers\PlayerController@delete')->name('player.delete')->middleware('auth');
Route::get('Playeredit/{id}/edit', 'App\Http\Controllers\PlayerController@edit')->name('player.edit')->middleware('auth');
Route::resource('participations','App\Http\Controllers\ParticipationController')->middleware('auth');
Route::resource('subcategories','App\Http\Controllers\SubcategoryController')->middleware('auth:admin');