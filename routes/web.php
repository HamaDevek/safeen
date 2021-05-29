<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('index');
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/refugee', 'HomeController@form')->name('form');
    Route::post('/ref', 'HomeController@datasend')->name('datasend');
    Route::get('/home', 'HomeController@indexDashboard')->name('home.index');
    Route::resource('/ourteam', 'OurTeamController');
    Route::resource('/ouroffice', 'OurOfficeController');
    Route::resource('/refugee', 'RefugeeController');
    Route::resource('/user', 'UserCustemController');
    Route::get('/accepted/refugee', 'RefugeeController@accepted')->name('refugee.accepted');
    Route::get('/rejected/refugee', 'RefugeeController@rejected')->name('refugee.rejected');
    Route::get('/refugee/state/{id}/{state}', 'RefugeeController@state')->name('refugee.state');
    Route::resource('/website', 'WebsiteController');
});
