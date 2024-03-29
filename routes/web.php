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

Route::get('/', 'PublicController@index')->middleware('guest')->name('index');

Auth::routes();

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('crafts', 'CraftController')->except([
        'show', 'create'
    ]);

    Route::get('/statistics', 'StatisticsController@index')->name('statistics');
});
