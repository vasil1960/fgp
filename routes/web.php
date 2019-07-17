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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Pages navigation
// 
Route::get('/pages/home', 'PagesController@home')->name('pages.home');
Route::get('/pages/users', 'PagesController@users')->name('pages.users');
Route::get('/pages/manuscripts', 'PagesController@manuscripts')->name('pages.manuscripts');
Route::get('/pages/instructions', 'PagesController@instructions')->name('pages.instructions');

// Send Message from Contact form
// Open contact form
Route::get('/pages/contacts', 'PagesController@contactUs')->name('pages.contacts');
// Save data from contact form in database and send email to admin 
Route::post('/pages/contacts', 'PagesController@contactUsPost');

// Manuscrips resources
Route::resources(['manuscripts' => 'ManuscriptController']); 