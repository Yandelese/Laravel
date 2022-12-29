<?php

use Illuminate\Support\Facades\Auth;
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



Route::group(['namespace'=>'Manufactures'],function (){
    Route::get('/',                               'IndexController')->name('index');
    Route::get('manufactures_details/{argument}', 'ShowController')->name('manufacturers_details');
});



Route::group(['namespace'=>'Manufactures','middleware'=> 'admin'], function (){
    Route::get('/create',                         'CreateController')->name('create_manufactures');
    Route::get('/edit_manufactures/{argument}',   'EditController')->name('edit_manufactures');
    Route::post('/add_manufactures_to_db',        'Add_To_DB_Controller')->name('add_to_DB');
    Route::post('/update_manufacturer/{argument}','UpdateController')->name('update_manufacturer');
    Route::get('/delete_manufactures/{argument}', 'DeleteController')->name('delete_manufactures');

    Route::get('/create/distributors', 'CreateController')->name('create_distributors');
    Route::post('/add_distributor_to_db','Add_To_DB_Controller')->name('add_distributor_to_db');
    Route::get('edit_distributor/{argument}', 'EditController')->name('edit_distributor');
    Route::post('update_distributor/{argument}', 'UpdateController')->name('update_distributor');
    Route::get('/delete_distributor/{argument}', 'DeleteController')->name('delete_distributor');

    Route::get('/add_weakness','CreateController')->name('create_weakness');
    Route::post('/add_weakness_to_db','Add_To_DB_Controller')->name('add_weakness_to_db');
    Route::get('/edit_weakness/{argument}','EditController')->name('edit_weakness');
    Route::post('/update_weakness/{argument}','UpdateController')->name('update_weakness');
    Route::get('/delete_weakness/{argument}', 'DeleteController')->name('delete_weakness');


});


Route::get('access_denied_page','App\\Http\\Controllers\\HomeController@acces_denied_page')->name('access_denied_page');


Auth::routes();
Route::get('/home', 'App\\Http\\Controllers\\HomeController@index')->name('home');

