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

//Backend URL
Route::namespace('App\Http\Controllers\Backend')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::middleware(['admin'])->group(function () {
                //Control Panel
            Route::get('/', 'DefaultController@index')->name('dashboard.index');
            Route::resource('files','FilesController');
            Route::get('/file/{id}', 'FileDownloadController@view');
        });
    });
});

//Frontend URL
Route::namespace('App\Http\Controllers\Frontend')->group(function () {
    //Index
    Route::get('/', 'DefaultController@index')->name('index.page');
});