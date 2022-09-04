<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\MuseumController;
use App\Http\Controllers\NewsController;
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

//NEWS
Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/{id}', [NewsController::class, 'show'])->name('news.show');


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

//MAILCHIMP

//UNSUBSCRIBE
Route::get('/unsubscribe', function () {
    return view('manage.mailchimp.unsubscribe');
});

Route::post('unsubscribe', [ManageController::class, 'mailchimpUnsub'])->name('manage.mailchimp.unsubscribe');

//SYNC
Route::group(['middleware' => 'auth'], function(){
    Route::get('manage/mailchimp', [ManageController::class, 'mailchimpSync'])->name('manage.mailchimp.sync');
    Route::patch('manage/mailchimp', [ManageController::class, 'mailchimpUpdate'])->name('manage.mailchimp.update');

});

//MANAGE ADMIN
Route::group(['middleware' => 'auth'], function(){
    Route::get('manage/admin/create', [ManageController::class, 'adminCreate'])->name('manage.admin.create')->middleware('can:isLevelTwo');
    Route::post('manage/admin', [ManageController::class, 'adminStore'])->name('manage.admin.store')->middleware('can:isLevelTwo');
    Route::get('manage/admin', [ManageController::class, 'adminIndex'])->name('manage.admin.index')->middleware('can:isLevelTwo');
    Route::get('manage/admin/{id}', [ManageController::class, 'adminShow'])->name('manage.admin.show')->middleware('can:isLevelTwo');
    Route::get('manage/admin/{id}/edit', [ManageController::class, 'adminEdit'])->name('manage.admin.edit')->middleware('can:isLevelTwo');
    Route::patch('manage/admin/{id}', [ManageController::class, 'adminUpdate'])->name('manage.admin.update')->middleware('can:isLevelTwo');
    Route::delete('manage/admin/{id}', [ManageController::class, 'adminDestroy'])->name('manage.admin.delete')->middleware('can:isLevelTwo');
});

//MANAGE NEWS
Route::group(['middleware' => 'auth'], function(){
    Route::get('manage/news/create', [ManageController::class, 'newsCreate'])->name('manage.news.create');
    Route::post('manage/news', [ManageController::class, 'newsStore'])->name('manage.news.store');
    Route::get('manage/news', [ManageController::class, 'newsIndex'])->name('manage.news.index');
    Route::get('manage/news/{id}', [ManageController::class, 'newsShow'])->name('manage.news.show');
    Route::get('manage/news/{id}/edit', [ManageController::class, 'newsEdit'])->name('manage.news.edit');
    Route::patch('manage/news/{id}', [ManageController::class, 'newsUpdate'])->name('manage.news.update');
    Route::delete('manage/news/{id}', [ManageController::class, 'newsDestroy'])->name('manage.news.delete');
});
//Route::get('manage/news', [ManageController::class, 'newsIndex'])->name('manage.news.index');



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

