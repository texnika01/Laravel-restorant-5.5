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
Route::post('menu/store', 'Page\MenuController@store')->name('menu.store');
Route::get('menu/{id}/edit', 'Page\MenuController@edit')->name('menu.edit');
Route::post('menu/{id}', 'Page\MenuController@update')->name('menu.update');

/** Route menu category*/
Route::get('menu_category','Page\MenucategoryController@index')->name('menu_category');
Route::get('menu_category/{id}/show', 'Page\MenucategoryController@show')->name('menu_category.show');
Route::get('menu_category/create', 'Page\MenucategoryController@create')->name('menu_category.create');
Route::post('menu_category/store', 'Page\MenucategoryController@store')->name('menu_category.store');
Route::get('menu_category/{id}/edit', 'Page\MenucategoryController@edit')->name('menu_category.edit');
Route::post('menu_category/{id}', 'Page\MenucategoryController@update')->name('menu_category.update');


/** Route event */
Route::get('event','Page\EventController@index')->name('event');
Route::get('event/{id}/show', 'Page\EventController@show')->name('event.show');
Route::get('event/create', 'Page\EventController@create')->name('event.create');
Route::post('event/store', 'Page\EventController@store')->name('event.store');
Route::get('event/{id}/edit', 'Page\EventController@edit')->name('event.edit');
Route::post('event/update', 'Page\EventController@update')->name('event.update');

/** Route blog */
Route::get('blog','Page\BlogController@index')->name('blog');
Route::get('blog/{id}/show', 'Page\BlogController@show')->name('blog.show');
Route::get('blog/create', 'Page\BlogController@create')->name('blog.create');
Route::post('blog/store', 'Page\BlogController@store')->name('blog.store');
Route::get('blog/{id}/edit', 'Page\BlogController@edit')->name('blog.edit');
Route::post('blog/update', 'Page\BlogController@update')->name('blog.update');

/** Route Category */
Route::get('category', 'Page\CategoryController@index')->name('category');
Route::get('category/{id}/show', 'Page\CategoryController@show')->name('category.show');
Route::get('category/create', 'Page\CategoryController@create')->name('category.create');
Route::post('category/store', 'Page\CategoryController@store')->name('category.store');
Route::get('category/{id}/edit', 'Page\CategoryController@edit')->name('category.edit');
Route::post('category/{id}', 'Page\CategoryController@update')->name('category.update');
/** Route statistic */
