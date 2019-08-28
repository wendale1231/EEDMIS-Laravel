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

Route::group(['middleware' => 'prevent-back-history'],function(){
  Auth::routes();
  Route::get('/logout', 'HomeController@home');
  Route::get('/', "HomeController@home");
});
//ADMIN

/*
 * kanang namespace mao na ang folder naming kay para kabalo ang laravel
 * asa/unsa na folder path iyang padulngan.
 * */

    //tanan routes sa admin kay naay prefix na "admin" E.g <your_website>/admin/dashboard
    //tanan pud names sa routes kay naay prefix na "admin." E.g ->name('admin.dashboard')
        //kaning middleware, mao ni mu check if naka login ba ang user
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

Route::namespace('Web\Admin')->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::middleware(['auth:web', 'role:admin'])->group(function () {
            Route::resource('/dashboard', 'AdminController');
        });
    });
});
Route::namespace('Web\PublicMarket')->group(function () {
    Route::prefix('market')->name('market.')->group(function () {
        Route::middleware(['auth:web', 'role:public_market'])->group(function () {
            Route::resource('/dashboard', 'StallDashboardController');
            Route::resource('/register', 'RegisterTenantController');
            Route::post('register','RegisterTenantController@store');
        });
    });
});


//ADMIN END
