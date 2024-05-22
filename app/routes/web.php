<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientJobController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;



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

Route::controller(PagesController::class)->group(function(){
Route::get('/page/{slug}', 'Pages')->name('pages');
Route::get('/pages/{slug}',  "SubPages")->name('subpages');
Route::get('/blog/details/{id}',  'BlogDetails')->name('blog.details');
Route::get('/jobs/industries/{id}',  'JobCategory')->name('industries-category');
Route::post('/contactus/request', 'ContactEmails')->name('contact-email');
});

Route::post('/jobs/apply/{id}', [ClientJobController::class, 'ApplyJob'])->name('apply.job');
Route::get('/job/details/{id}',  [ClientJobController::class, 'Details'])->name('job-details');
Route::post('/request/services/',  [ClientJobController::class, 'RequestService'])->name('request-service');


require __DIR__.'/auth.php';
