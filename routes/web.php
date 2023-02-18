<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ClientJobController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SliderController;



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


Route::prefix('admins')->group(function(){

    Route::get('/', [AdminDashboardController::class, 'Index'])->name('admin.index');


});


Route::get('/', [DashboardController::class, 'Index'])->name('index');
Route::get('/index', [DashboardController::class, 'Index'])->name('index');

Route::controller(PagesController::class)->group(function(){
Route::get('/page/{slug}', 'Pages')->name('pages');
Route::get('/pages/{slug}',  "SubPages")->name('subpages');
Route::get('/blog/details/{id}',  'BlogDetails')->name('blog.details');
Route::get('/job/details/{id}',  'Details')->name('job-details');
Route::get('/jobs/industries/{id}',  'JobCategory')->name('industries-category');
Route::post('/contactus/request', 'ContactEmails')->name('contact-email');
});

Route::post('/jobs/apply/{id}', [ClientJobController::class, 'ApplyJob'])->name('apply.job');



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });




require __DIR__.'/auth.php';
