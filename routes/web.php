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

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@render')
    ->name('main');

Route::get('/pravila', 'RulesController@render')
    ->name('rules');
Route::get('/kak-kupit-donat', 'PayGuideController@render')
    ->name('pay_guide');
Route::get('/opisanie-privilegiy', 'DescriptionProductsController@render')
    ->name('description_products');
Route::get('/kontakty', 'ContactsController@render')
    ->name('contacts');

Route::post('order', 'OrdersController@create');
