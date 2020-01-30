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

//Rotas com view
Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/home', function(){
	return view('welcome');
})->name('welcome');

Route::get('/planet', function (){
    return view('planet');
})->name('planet');


//Rotas com controller, mas apenas usa view
Route::get('/planet/create', 'CRUDPlanetController\CPlanetController@create')->name('planet.create');
Route::get('/planet/read', 'CRUDPlanetController\RPlanetController@read')->name('planet.read');
Route::get('/planet/update', 'CRUDPlanetController\UPlanetController@update')->name('planet.update');
Route::get('/planet/delete', 'CRUDPlanetController\DPlanetController@delete')->name('planet.delete');

//Rotas com uso total do controller (back-end)
Route::post('/planet/create/createresponse','CRUDPlanetController\CPlanetController@createresponse') ->name('planet.createresponse');
Route::get('/planet/read/readresponse','CRUDPlanetController\RPlanetController@readresponse')->name('planet.readresponse');
Route::post('/planet/update/updateresponse','CRUDPlanetController\UPlanetController@updateresponse')->name('planet.updateresponse');
Route::post('/planet/delete/deleteresponse','CRUDPlanetController\DPlanetController@deleteresponse')->name('planet.deleteresponse');
Route::post('/logado', 'Auth\LoginController@loginresponse')->name('loginresponse');

