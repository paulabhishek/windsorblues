<?php

use App\Http\Controllers\ContactController;
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




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//Route::resource('manage', ManageController::class);

//Route::get('manage', [ManageController::class, 'index'])->name('manage.index');

//Route::view('membership', 'membership.memberForm')->name('form');
//Route::post('/send', [MemberController::class, 'sendForm'])->name('send.form');
//Route::get('members', [MemberController::class, 'index'])->name('member.index');




//EVENT
Route::get('event/create', [EventController::class, 'create'])->name('event.create');
Route::post('event', [EventController::class, 'store'])->name('event.store');
Route::get('event', [EventController::class, 'index'])->name('event.index');
Route::get('event/{id}', [EventController::class, 'show'])->name('event.show');
Route::get('event/{id}/edit', [EventController::class, 'edit'])->name('event.edit');
Route::patch('event/{id}', [EventController::class, 'update'])->name('event.update');
Route::delete('event/{id}', [EventController::class, 'destroy'])->name('event.delete');


// MEMBER
Route::get('member/create', [MemberController::class, 'create'])->name('member.create');
Route::post('member', [MemberController::class, 'store'])->name('member.store');
Route::get('member', [MemberController::class, 'index'])->name('member.index');
Route::get('member/{id}', [MemberController::class, 'show'])->name('member.show');
Route::get('member/{id}/edit', [MemberController::class, 'edit'])->name('member.edit');
Route::patch('member/{id}', [MemberController::class, 'update'])->name('member.update');
Route::delete('member/{id}', [MemberController::class, 'destroy'])->name('member.delete');

// CONTACT
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'submit'])->name('contact.submit');

//MEMBERSHIP
Route::get('membership', [MemberController::class, 'showForm'])->name('membership.showform');
Route::post('membership', [MemberController::class, 'submit'])->name('membership.submit');

Route::get('museum', function () {
    return 'museum';
});


Route::get('about', function () {
    return 'about';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

