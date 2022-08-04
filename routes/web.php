<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\MuseumController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});



Auth::routes(['verify'=>true]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';



//EVENT
Route::get('event', [EventController::class, 'index'])->name('event.index');
Route::get('event/{id}', [EventController::class, 'show'])->name('event.show');



// MEMBER
Route::get('member', [MemberController::class, 'index'])->name('member.index');


// CONTACT
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'submit'])->name('contact.submit');


//MUSEUM
Route::get('museum', [MuseumController::class, 'index'])->name('museum.index');


//MEMBERSHIP
Route::get('membership', [MemberController::class, 'showForm'])->name('membership.showform');
Route::post('membership', [MemberController::class, 'submit'])->name('membership.submit');

//MANAGE
Route::get('manage', [ManageController::class, 'index'])->name('manage.index');

//MANAGE EVENT
Route::group(['middleware' => 'auth'], function(){
    Route::get('manage/event/create', [ManageController::class, 'eventCreate'])->name('manage.event.create');
    Route::post('manage/event', [ManageController::class, 'eventStore'])->name('manage.event.store');
    Route::get('manage/event', [ManageController::class, 'eventIndex'])->name('manage.event.index');
    Route::get('manage/event/{id}', [ManageController::class, 'eventShow'])->name('manage.event.show');
    Route::get('manage/event/{id}/edit', [ManageController::class, 'eventEdit'])->name('manage.event.edit');
    Route::patch('manage/event/{id}', [ManageController::class, 'eventUpdate'])->name('manage.event.update');
    Route::delete('manage/event/{id}', [ManageController::class, 'eventDestroy'])->name('manage.event.delete');

});

//MANAGE MEMBER
Route::group(['middleware' => 'auth'], function(){
    Route::get('manage/member/create', [ManageController::class, 'memberCreate'])->name('manage.member.create');
    Route::post('manage/member', [ManageController::class, 'memberStore'])->name('manage.member.store');
    Route::get('manage/member', [ManageController::class, 'memberIndex'])->name('manage.member.index');
    Route::get('manage/member/{id}', [ManageController::class, 'memberShow'])->name('manage.member.show');
    Route::get('manage/member/{id}/edit', [ManageController::class, 'memberEdit'])->name('manage.member.edit');
    Route::patch('manage/member/{id}', [ManageController::class, 'memberUpdate'])->name('manage.member.update');
    Route::delete('manage/member/{id}', [ManageController::class, 'memberDestroy'])->name('manage.member.delete');

});



Route::get('/', function () {
    return view('welcome');
});




Route::get('about', function () {
    return 'about';
});

Route::get('chatham', function () {
    return view('chatham.home');
})->name('chatham.home');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

