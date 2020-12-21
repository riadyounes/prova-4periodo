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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contacts', 'ContactController@index')->name('contact');
Route::get('/contacts/new', 'ContactController@create')->name('contact.create');
Route::post('/contacts', 'ContactController@store')->name('contact.store');


Route::get('/contacts/email/{contact}', 'EmailController@index')->name('contact.email');
Route::delete('/contacts/email/{email}/{contact}', 'EmailController@destroy')->name('email.destroy');
Route::get('/contacts/{contact}/email', 'EmailController@create')->name('email.create');
Route::post('/email', 'EmailController@store')->name('email.store');


Route::get('/contacts/telephones/{contact}', 'TelephonesController@index')->name('contact.telephone');
Route::get('/contacts/telephone/{contact}', 'TelephonesController@create')->name('telephone.create');
Route::post('/contacts/telephone', 'TelephonesController@store')->name('telephone.store');



Route::get('/telephone/type/{contact}', 'TelephonesTypesController@create')->name('type.create');
Route::post('/telephone', 'TelephonesTypesController@store')->name('type.store');
