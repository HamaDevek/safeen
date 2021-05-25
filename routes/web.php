<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('index');
Route::get('/refugee', 'HomeController@form')->name('form');
Route::post('/refugee', 'HomeController@datasend')->name('datasend');

Auth::routes();
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@indexDashboard')->name('home.index');
    Route::resource('/ourteam', 'OurTeamController');
    Route::resource('/ouroffice', 'OurOfficeController');
    Route::resource('/refugee', 'RefugeeController');
    Route::get('/accepted/refugee', 'RefugeeController@accepted')->name('refugee.accepted');
    Route::get('/rejected/refugee', 'RefugeeController@rejected')->name('refugee.rejected');
    Route::get('/refugee/state/{id}/{state}', 'RefugeeController@state')->name('refugee.state');
    Route::resource('/website', 'WebsiteController');
});
