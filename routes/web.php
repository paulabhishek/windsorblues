<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\MuseumController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WelcomeController;
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


Route::get('chatham', function () {
    return view('chatham.home');
})->name('chatham.home');


//WELCOME
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');
Route::post('/', [WelcomeController::class, 'newsletterStore'])->name('welcome.newsletterStore');
Route::get('/chatham', [WelcomeController::class, 'chathamIndex'])->name('welcome.chatham');

//Route::get('/', function () {
//    return view('welcome');
//});

//ABOUT
Route::get('about', [AboutController::class, 'index'])->name('about.index');
//Route::resource('/about', 'about.index');





//EVENT
    Route::get('events', [EventController::class, 'index'])->name('event.index');
    Route::get('eventpast', [EventController::class, 'eventIndexPast'])->name('event.index.past');
    Route::get('event/{id}', [EventController::class, 'show'])->name('event.show');

//NEWS
    Route::get('news', [NewsController::class, 'index'])->name('news.index');
    Route::get('news/{id}', [NewsController::class, 'show'])->name('news.show');


// MEMBER
//    Route::get('member', [MemberController::class, 'index'])->name('member.index');


// CONTACT
    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('contact', [ContactController::class, 'submit'])->name('contact.submit');


//MUSEUM
    Route::get('museum', [MuseumController::class, 'index'])->name('museum.index');
    Route::get('museum/{id}', [MuseumController::class, 'show'])->name('museum.show');


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

//MANAGE MUSEUM
Route::group(['middleware' => 'auth'], function(){
    Route::get('manage/museum/create', [ManageController::class, 'museumCreate'])->name('manage.museum.create');
    Route::post('manage/museum', [ManageController::class, 'museumStore'])->name('manage.museum.store');
    Route::get('manage/museum', [ManageController::class, 'museumIndex'])->name('manage.museum.index');
    Route::get('manage/museum/{id}', [ManageController::class, 'museumShow'])->name('manage.museum.show');
    Route::get('manage/museum/{id}/edit', [ManageController::class, 'museumEdit'])->name('manage.museum.edit');
    Route::patch('manage/museum/{id}', [ManageController::class, 'museumUpdate'])->name('manage.museum.update');
    Route::delete('manage/museum/{id}', [ManageController::class, 'museumDestroy'])->name('manage.museum.delete');
});

//MANAGE MEMBER
    Route::group(['middleware' => 'auth'], function(){
        Route::get('manage/member/create', [ManageController::class, 'memberCreate'])->name('manage.member.create');
        Route::post('manage/member', [ManageController::class, 'memberStore'])->name('manage.member.store');
        Route::get('manage/member{filter?}', [ManageController::class, 'memberIndex'])->name('manage.member.index');
        Route::get('manage/member/{id}/edit', [ManageController::class, 'memberEdit'])->name('manage.member.edit');
        Route::patch('manage/member/{id}', [ManageController::class, 'memberUpdate'])->name('manage.member.update');
        Route::delete('manage/member/{id}', [ManageController::class, 'memberDestroy'])->name('manage.member.delete');
    });
//MEMBER SEARCH
Route::group(['middleware' => 'auth'], function(){
    Route::get('manage/member/search', [ManageController::class, 'searchMember'])->name('manage.member.search');

});

//MAILCHIMP

    //UNSUBSCRIBE
        Route::get('/unsubscribe', function () {
            return view('manage.mailchimp.unsubscribe');
        });

        Route::post('unsubscribe', [ManageController::class, 'mailchimpUnsub'])->name('manage.mailchimp.unsubscribe');

    //SYNC AND UPDATE
        Route::group(['middleware' => 'auth'], function(){
            Route::get('manage/mailchimp', [ManageController::class, 'mailchimpSync'])->name('manage.mailchimp.sync');
            Route::post('manage/mailchimp', [ManageController::class, 'mailchimpUpdate'])->name('manage.mailchimp.update');

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

//MANAGE Presidents MSG
Route::group(['middleware' => 'auth'], function(){
    Route::get('manage/presidentmsg/create', [ManageController::class, 'presidentmsgCreate'])->name('manage.presidentmsg.create');
    Route::post('manage/presidentmsg', [ManageController::class, 'presidentmsgStore'])->name('manage.presidentmsg.store');
    Route::get('manage/presidentmsg', [ManageController::class, 'presidentmsgIndex'])->name('manage.presidentmsg.index');
//    Route::get('manage/presidentmsg/{id}', [ManageController::class, 'presidentmsgShow'])->name('manage.presidentmsg.show');
    Route::get('manage/presidentmsg/{id}/edit', [ManageController::class, 'presidentmsgEdit'])->name('manage.presidentmsg.edit');
    Route::patch('manage/presidentmsg/{id}', [ManageController::class, 'presidentmsgUpdate'])->name('manage.presidentmsg.update');
//    Route::delete('manage/presidentmsg/{id}', [ManageController::class, 'presidentmsgDestroy'])->name('manage.presidentmsg.delete');
});

//Route::get('manage/news', [ManageController::class, 'newsIndex'])->name('manage.news.index');













//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

