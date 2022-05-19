<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */

Route::get('/', 'WelcomeController@index');

/*
 * Admin Controller start
 */
Route::get('/admin-panel', 'AdminController@index');
Route::post('/admin-login-check', 'AdminController@admin_login_check');

/*
 * Admin Controller End
 */

/*
 * SuperAdmin Controller start
 */
Route::get('/dashboard', 'SuperAdminController@index');
/////////////////////////////////////_Category Start_///////////////////////////////////////
Route::get('/add-category', 'SuperAdminController@add_category');
Route::post('/save-category', 'SuperAdminController@save_category');
Route::get('/manage-category', 'SuperAdminController@manage_category');
Route::get('/published-category/{id}', 'SuperAdminController@published_category');
Route::get('/unpublished-category/{id}', 'SuperAdminController@unpublished_category');
Route::get('/edit-category/{id}', 'SuperAdminController@edit_category');
Route::post('/update-category', 'SuperAdminController@update_category');
Route::get('/delete-category/{id}', 'SuperAdminController@delete_category');
/////////////////////////////////////_Category End_///////////////////////////////////////
/////////////////////////////////////_Author start_///////////////////////////////////////
Route::get('/add-author', 'SuperAdminController@add_author');
Route::get('/manage-author', 'SuperAdminController@manage_author');
Route::post('/save-author', 'SuperAdminController@save_author');
Route::get('/published-author/{id}', 'SuperAdminController@published_author');
Route::get('/unpublished-author/{id}', 'SuperAdminController@unpublished_author');
Route::get('/edit-author/{id}', 'SuperAdminController@edit_author');
Route::post('/update-author', 'SuperAdminController@update_author');
Route::get('/delete-author/{id}', 'SuperAdminController@delete_author');
/////////////////////////////////////_Author End_///////////////////////////////////////
/////////////////////////////////////_Post start_///////////////////////////////////////
Route::get('/add-post', 'SuperAdminController@add_post');
Route::get('/manage-post', 'SuperAdminController@manage_post');
Route::post('/save-post', 'SuperAdminController@save_post');
Route::get('/published-post/{id}', 'SuperAdminController@published_post');
Route::get('/unpublished-post/{id}', 'SuperAdminController@unpublished_post');
Route::get('/edit-post/{id}', 'SuperAdminController@edit_post');
Route::get('/view-post/{id}', 'SuperAdminController@view_post');
Route::post('/update-post', 'SuperAdminController@update_post');
Route::get('/delete-post/{id}', 'SuperAdminController@delete_post');
/////////////////////////////////////_Post End_///////////////////////////////////////
/////////////////////////////////////_Logout End_///////////////////////////////////////
Route::get('/logout', 'SuperAdminController@logout');
/////////////////////////////////////_Logout End_///////////////////////////////////////


/*
 * SuperAdmin Controller End
*/



/*
 * Welcome Controller start
 */
Route::get('/news-category/{id}', 'WelcomeController@newscategory');
Route::get('/news/{name}', 'WelcomeController@newsdetails');

/*
 * Welcome Controller End
 */