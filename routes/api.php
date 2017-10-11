<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::get('/users', function (Request $request) 
{

	$users = User::all();
	return $users;
});*/

Route::get('/users', 'apiUserController@returnAllUsers')->name('usersApi');
Route::get('/user/{id}', 'apiUserController@returnUserById')->name('userIdApi');

Route::get('/companies', 'apiCompanyController@returnAllCompanies')->name('companiesApi');
Route::get('/company/{id}', 'apiCompanyController@returnCompanyById')->name('companiyIdApi');

Route::get('/cards', 'apiCardController@returnAllCards')->name('cardsApi');
Route::get('/card/{id}', 'apiCardController@returnCardById')->name('cardIdApi');
Route::post('/card', 'apiCardController@create')->name('cardsApi');


Route::get('/usercards', 'apiUserCardController@returnAllUserCards')->name('userCardsApi');
Route::get('/usercard/{id}', 'apiUserCardController@returnUserCardById')->name('userCardIdApi');

Route::get('/scan/{id}', 'apiUserCardController@scannedCard')->name('scanCard');
