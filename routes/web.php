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

Route::get('/',[
    'uses' => 'App\Http\Controllers\Controller@home',
    'as' => 'home'
]);
Route::get('/product',[
    'uses' => 'App\Http\Controllers\Controller@product',
    'as' => 'product'
]);
Route::get('/article',[
    'uses' => 'App\Http\Controllers\Controller@article',
    'as' => 'article'
]);
Route::get('/article/{id}/{slug}',[
    'uses' => 'App\Http\Controllers\Controller@article_detail',
    'as' => 'article_detail'
]);
Route::get('/about',[
    'uses' => 'App\Http\Controllers\Controller@about',
    'as' => 'about'
]);
Route::get('/contact',[
    'uses' => 'App\Http\Controllers\Controller@contact',
    'as' => 'contact'
]);
