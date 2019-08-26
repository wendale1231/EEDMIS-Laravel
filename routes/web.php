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

Auth::routes();

Route::get('/', 'HomeController@home');

//Added For Registration
Route::get('/home', 'HomeController@home');

Route::get('/IBJT', 'HomeController@ibjt');

Route::get('/admin', 'HomeController@admin');

Route::get('/Burial', 'HomeController@burial');

//ADMIN

/*
 * kanang namespace mao na ang folder naming kay para kabalo ang laravel
 * asa/unsa na folder path iyang padulngan.
 * */
Route::namespace('Web\Admin')->group(function () {

    //tanan routes sa admin kay naay prefix na "admin" E.g <your_website>/admin/dashboard
    //tanan pud names sa routes kay naay prefix na "admin." E.g ->name('admin.dashboard')
    Route::prefix('admin')->name('admin.')->group(function () {

        //kaning middleware, mao ni mu check if naka login ba ang user
        Route::middleware(['auth:web'])->group(function () {

            /*
             * Tricky ni. So read carefully.
             *
             * Since nag gamit tag resource, mu auto generate na na sya.
             * Imagine kaning Route::resource('/dashboard', 'StallDashboardController');
             * Kay mahimo na syang:
             * Route::get('dashboard')->name('admin.dashboard.index')
             * Route::get('dashboard/create')->name('admin.dashboard.create')
             * Route::post('store')->name('admin.dashboard.store')
             * Route::get('dashboard/{dashboard}')->name('admin.dashboard.show')
             * Route::get('dashboard/{dashboard}/edit')->name('admin.dashboard.edit')
             * Route::put('dashboard/{dashboard}')->name('admin.dashboard.update')
             * Route::delete('dashboard/{dashboard}')->name('admin.dashboard.destroy') (note: never delete shits. Use softdelete instead)
             *
             * */
            Route::resource('/dashboard', 'StallDashboardController');
        });

    });
});
//ADMIN END
