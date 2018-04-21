<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'HomeController@index')->name('index');
/** Route Menu */
Route::get('menu','Page/MenuController@index')->name('menu');
Route::get('menu/{id}/show', 'Page/MenuController@show')->name('menu.show');
/** Route Event */
Route::get('event','Page/EventController@index')->name('event');
Route::get('event/{id}/show', 'Page/EventController@show')->name('event.show');
/** Route blog */
Route::get('blog','Page/BlogController@index')->name('blog');
Route::get('blog/{id}/show', 'Page/BlogController@show')->name('blog.show');

Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact/send', 'ContactController@send')->name('contact.send');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
    });
});
/**
 *  Route laravel Loger
 */
/**Route::group(['middleware' => ['web', 'activity']], function () {
    Route::get('/', 'WelcomeController@welcome')->name('welcome');
});
*/