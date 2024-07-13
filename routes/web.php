<?php

use App\Http\Controllers\User\ProjectPlusController;
use App\Http\Controllers\User\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\PagesController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\DeveloperController;
use App\Http\Controllers\User\PartnerController;

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


Route::get('/index', [DashboardController::class, 'Index'])->name('index');
Route::get('/', [DashboardController::class, 'Index'])->name('home');


Route::controller(PagesController::class)->group(function(){
Route::get('/page/{slug}', 'Pages')->name('pages');
Route::get('/pages/{slug}',  "SubPages")->name('subpages');

});

Route::controller(BlogController::class)->group(function(){
    Route::get('/blogs',  'Index')->name('users.blogs.index');
    Route::get('/blog/details/{id}',  'Details')->name('blog.details');
});

Route::controller(ContactController::class)->group(function(){
    Route::get('/contact', 'Index')->name('users.contact.index');
    Route::post('/contactus/request', 'Store')->name('contact-email');
});

Route::controller(AboutController::class)->group(function() {
    Route::get('/about', '__Invoke')->name('users.about.index');
    Route::get('/about/team/{team_id}', 'getTeamMember')->name('team.member');
});


Route::controller(ProjectPlusController::class)->group(function () {

    Route::get('/projectplus', 'Index')->name('users.projectplus.index');

});

Route::controller(DeveloperController::class)->group(function() {

    Route::get('/developers', 'Index')->name('users.developers.index');
});

Route::controller(PartnerController::class)->group(function() {

    Route::get('partners', 'Index')->name('users.partners.index');
});


require __DIR__.'/auth.php';
