<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EventController;

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

Route::get('manage', [ManageController::class, 'index'])->name('manage.index');

Route::get('member', [MemberController::class, 'index'])->name('member.index');

Route::get('events', [EventController::class, 'index'])->name('member.index');


Route::get('museum', function () {
    return 'museum';
});

Route::get('contact', function () {
    return 'contact';
});

Route::get('about', function () {
    return 'about';
});
