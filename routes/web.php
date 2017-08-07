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

Route::get('/', 'HomeController@index');
Route::get('/facilities', 'FacilitiesController@index');
Route::get('/clubs', 'ClubsController@index');
Route::get('/club/{slug}', 'ClubsController@show');
Route::get('/people', 'PeopleController@index');
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');
Route::get('/contact/thank-you', 'ContactController@thanks');

Auth::routes();

/* Admin Dashboard */
Route::get('/admin', 'DashboardController@index');
Route::post('/admin/create-option', 'DashboardController@addOption');

/* Facilities Admin */
Route::get('/admin/facilities', 'FacilitiesController@admin');
Route::get('/admin/facilty/create', 'FacilitiesController@create');
Route::post('/admin/facilty/create', 'FacilitiesController@store');
Route::get('/admin/facility/{id}', 'FacilitiesController@edit');
Route::put('/admin/facility/{id}', 'FacilitiesController@update');
Route::delete('/admin/facility/{id}', 'FacilitiesController@destroy');

/* Clubs Admin */
Route::get('/admin/clubs', 'ClubsController@admin');
Route::get('/admin/club/add', 'ClubsController@create');
Route::post('/admin/club/add', 'ClubsController@store'); 
Route::get('/admin/club/{id}/edit', 'ClubsController@edit');
Route::put('/admin/club/{id}/edit', 'ClubsController@update');
Route::delete('/admin/club/{id}/delete', 'ClubsController@destroy');

/* People Admin */
Route::get('/admin/people', 'PeopleController@admin');
Route::get('/admin/person/create', 'PeopleController@create');
Route::post('/admin/person/create', 'PeopleController@store');
Route::get('/admin/person/{id}', 'PeopleController@edit');
Route::put('/admin/person/{id}', 'PeopleController@update');
Route::delete('/admin/person/image/{id}', 'PeopleController@remove');
Route::delete('/admin/person/{id}', 'PeopleController@destroy');
