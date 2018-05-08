<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
/** Route menu */
Route::get('menu','Page\MenuController@index')->name('menu');
Route::get('menu/{id}/show', 'Page\MenuController@show')->name('menu.show');
Route::get('menu/create', 'Page\MenuController@create')->name('menu.create');
/** Route event */
Route::get('event','Page\EventController@index')->name('event');
Route::get('event/{id}/show', 'Page\EventController@show')->name('event.show');
Route::get('event/create', 'Page\EventController@create')->name('event.create');
/** Route blog */
Route::get('blog','Page\BlogController@index')->name('blog');
Route::get('blog/{id}/show', 'Page\BlogController@show')->name('blog.show');
Route::get('blog/create', 'Page\BlogController@create')->name('blog.create');

/** Route Category */
Route::get('category', 'Page\CategoryController@index')->name('category');
Route::get('category/{id}/show', 'Page\CategoryController@show')->name('category.show');
Route::get('category/create', 'Page\CategoryController@create')->name('category.create');

/** Route statistic */
