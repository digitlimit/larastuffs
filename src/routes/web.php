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

Route::name('digitlimit.larastuffs.')->namespace('Digitlimit\Larastuffs\App\Http\Controllers')->group(function ()
{
    Route::prefix('adminpanel')->name('admin')->namespace('Admin')->group(function ()
    {
        //Load single app page for view
        Route::get('/{any?}', 'HomeController@index')
            ->where('any', '^(?!api).*$');
    });
});
