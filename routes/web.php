<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\User\DonationController as UserDonation;
use App\Http\Controllers\User\EventController;
use App\Http\Controllers\User\PaymentController;

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


require __DIR__.'/admin.php';


Route::get('/', [DashboardController::class, 'Index'])->name('index');
Route::controller(UserDonation::class)->group(function() {
Route::get('/donations', 'Index')->name('users.donation.index');
Route::get('donations/{donation_id}', 'Details')->name('user.donation.details');
});

Route::controller(EventController::class)->group(function(){
Route::get('/event', 'Index')->name('user.events.index');
Route::get('/events/{event_id}', 'Details')->name('users.events.details');
});

Route::post('/pay', [PaymentController::class, 'pay'])->name('pay');
Route::get('/payment/callback', [PaymentController::class,'handleCallback']);

Route::controller(PagesController::class)->group(function(){
Route::get('/page/{slug}', 'Pages')->name('pages');
Route::get('/pages/{slug}',  "SubPages")->name('subpages');
Route::get('/blog/details/{id}',  'BlogDetails')->name('blog.details');
Route::get('/jobs/industries/{id}',  'JobCategory')->name('industries-category');
Route::post('/contactus/request', 'ContactEmails')->name('contact-email');
});




require __DIR__.'/auth.php';
