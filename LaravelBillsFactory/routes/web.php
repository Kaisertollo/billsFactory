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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/about/{id}', function ($id) {
    //return view('pages.about');
    return "user's id:".$id;
});*/

Route::get('/', "CompteurController@index") ;
Route::get('/create', "CompteurController@create") ;
Route::get('/facture/create/{id}', "FactureController@create") ;
Route::get('/facture/payer/{id}', "FactureController@payer") ;
Route::get('/facture/showall/{id}', "FactureController@showall") ;
//Route::get('/facture/show', "FactureController@show") ;
Route::get('facture/show', ['middleware' => 'cors','uses' => 'FactureController@show']);

Route::post('/facture/store', "FactureController@store") ;
Route::get('/services', "PagesController@services") ;
//Route::resource('Post','PostsController');