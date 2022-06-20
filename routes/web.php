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

Route::get('/', function () {
    return view('master');
});

Route::get('manage', function () {
    return 'manager';
});

Route::get('member', function () {
    return 'member';
});

Route::get('events', function () {
    return 'events';
});


Route::get('museum', function () {
    return 'museum';
});

Route::get('contact', function () {
    return 'contact';
});

Route::get('about', function () {
    return 'about';
});
