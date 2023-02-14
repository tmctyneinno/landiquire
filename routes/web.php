<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
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

Route::get('/', [DashboardController::class, 'Index'])->name('index');
Route::get('/index', [DashboardController::class, 'Index'])->name('index');
Route::get('/page/{slug}', [PagesController::class, "Pages"])->name('pages');
Route::get('/pages/{slug}', [PagesController::class, "SubPages"])->name('subpages');
Route::get('/blog/details/{id}', [PagesController::class, 'BlogDetails'])->name('blog.details');
Route::get('/job/details/{id}', [ClientJobController::class, 'Details'])->name('job-details');
Route::get('/jobs/industries/{id}', [PagesController::class, 'JobCategory'])->name('industries-category');



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


require __DIR__.'/auth.php';
