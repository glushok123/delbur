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

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/user-agreement', 'App\Http\Controllers\HomeController@showUserAgreement');
Route::get('/privacy-policy', 'App\Http\Controllers\HomeController@showPrivacyPolicy');
Route::get('/offer', 'App\Http\Controllers\HomeController@showOffer');

Route::post('/get-products-by-filters', 'App\Http\Controllers\HomeController@filtersPost');
Route::get('/get-products-by-filters', 'App\Http\Controllers\HomeController@filtersGet');

Route::post('/feedback-send', 'App\Http\Controllers\FeedbackController@create');
Route::post('/order-send', 'App\Http\Controllers\OrderController@create');

Route::get('/public/uploads/{name}', 'App\Http\Controllers\ImageController@show')->name('image');

Route::post('/auth/login', 'App\Http\Controllers\UserRoleController@loginUser');
Route::post('/auth/register', 'App\Http\Controllers\UserRoleController@registerUser');
Route::get('/auth/logout', 'App\Http\Controllers\UserRoleController@logout');

Route::prefix('lk')->group(function () {
    Route::get('/user', 'App\Http\Controllers\PersonalAccountController@lkUser');
    Route::get('/contractor', 'App\Http\Controllers\PersonalAccountController@lkContractor');
});

Route::prefix('application')->group(function () {
    Route::post('/add', 'App\Http\Controllers\ApplicationController@create');
    Route::post('/edit/{applicationId}', 'App\Http\Controllers\ApplicationController@edit');
    Route::post('/show/{applicationId}', 'App\Http\Controllers\ApplicationController@show');
    Route::post('/delete/{applicationId}', 'App\Http\Controllers\ApplicationController@show');
});

Route::prefix('map')->group(function () {
    Route::get('/borehole/show', 'App\Http\Controllers\BoreholeController@show');
    Route::get('/borehole/get-json', 'App\Http\Controllers\BoreholeController@json');
});

//Route::get('/test/load', 'App\Http\Controllers\TestController@test');