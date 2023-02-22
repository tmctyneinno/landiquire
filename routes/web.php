<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ClientJobController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManagePagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MenuController as MenuPage;
use App\Http\Controllers\NewsController;

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


Route::group(['prefix' => 'admins', 'as' => 'admin.'], function(){

    Route::get('/', [AdminDashboardController::class, 'Index'])->name('index');
    Route::controller(MenuPage::class)->group(function(){
        Route::get('/website/menus', 'Index')->name('menu.index');
        Route::get('/website/menu/create',  'Create')->name('addMenu');
        Route::post('/website/menu/store', 'Store')->name('MenuStore');
        Route::get('/menu/edit/{id}','Edit')->name('menu.edit');
        Route::post('/website/menu/update/{id}',  'Update')->name('MenuUpdate');
        Route::get('/website/menu/disable/{id}',  'Disable')->name('MenuDisable');
        Route::get('/website/menu/enable/{id}',  'Enable')->name('MenuEnable');
        Route::get('/website/submenu/create/{id}',  'SubMenuCreate')->name('subMenu.Create');
        Route::post('/website/submenu/store/{id}', 'SubMenuStore')->name('SubMenuStore');
        Route::get('/website/submenu/edit/{id}',  'SubMenuEdit')->name('subMenu.edit');
        Route::post('/website/submenu/update/{id}', 'SubMenuUpdate')->name('SubMenuUpdate');
        Route::get('/website/submenu/delete/{id}',  'SubMenuDelete')->name('subMenu.delete');

    });

    Route::controller(ManagePagesController::class)->group(function(){
        Route::get('/website/pages', 'Index')->name('manage.pages');
        Route::get('/website/pages/create/',  'PagesCreate')->name('Pages.Create');
        Route::post('/website/pages/store/', 'PagesStore')->name('PagesStore');
        Route::get('/website/pages/edit/{id}',  'PagesEdit')->name('PagesEdit');
        Route::post('/website/pages/update/{id}', 'PagesUpdate')->name('PagesUpdate');
        Route::get('/website/pages/delete/{id}',  'PagesDelete')->name('PagesDelete');
        Route::get('/website/pages/activate/{id}',  'PagesActivate')->name('PagesActivate');
        Route::get('/website/pages/disable/{id}',  'PagesDisable')->name('PagesDisable');
        Route::get('/website/pages/submenu/{id}',  'GetSubMenus')->name('page.getSubmenu');
    });

    Route::controller(BlogController::class)->group(function(){
        Route::get('/wesite/blog', 'Index')->name('blogs.index');
        Route::get('/wesite/blog/create', 'BlogsCreate')->name('BlogsCreate');
        Route::post('/website/blog/store', 'BlogsStore')->name('BlogsStore');
        Route::get('/website/blog/edit/{id}', 'BlogsEdit')->name('BlogsEdit');
        Route::post('/website/blog/update/{id}', 'BlogsUpdate')->name('BlogsUpdate');
        Route::get('/wensite/blog/delete/{id}', 'BlogsDelete')->name('BlogsDelete');
        Route::get('/website/blog/activate/{id}', 'BlogsActivate')->name('BlogsActivate');
        Route::get('/webiste/blog/diabled/{id}', 'BlogsDisable')->name('BlogsDisable');
    });
  
    Route::controller(JobsController::class)->group(function(){
        Route::get('/wesite/job', 'Index')->name('Jobs.index');
        Route::get('/wesite/jobs/create', 'JobsCreate')->name('JobsCreate');
        Route::post('/website/jobs/store', 'JobsStore')->name('JobsStore');
        Route::get('/website/jobs/edit/{id}', 'JobsEdit')->name('JobsEdit');
        Route::post('/website/jobs/update/{id}', 'JobsUpdate')->name('JobsUpdate');
        Route::get('/wensite/jobs/delete/{id}', 'JobsDelete')->name('JobsDelete');
        Route::get('/website/jobs/activate/{id}', 'JobsActivate')->name('JobsActivate');
        Route::get('/webiste/jobs/diabled/{id}', 'JobsDisable')->name('JobsDisable');
        Route::get('/webiste/jobs/applied/{id}', 'JobsApplied')->name('JobsApplied');
        Route::get('/webiste/jobs/download/{id}', 'DownloadCV')->name('DownloadCV');
    });

});


Route::get('/', [DashboardController::class, 'Index'])->name('index');
Route::get('/index', [DashboardController::class, 'Index'])->name('index');

Route::controller(PagesController::class)->group(function(){
Route::get('/page/{slug}', 'Pages')->name('pages');
Route::get('/pages/{slug}',  "SubPages")->name('subpages');
Route::get('/blog/details/{id}',  'BlogDetails')->name('blog.details');
Route::get('/jobs/industries/{id}',  'JobCategory')->name('industries-category');
Route::post('/contactus/request', 'ContactEmails')->name('contact-email');
});

Route::post('/jobs/apply/{id}', [ClientJobController::class, 'ApplyJob'])->name('apply.job');
Route::get('/job/details/{id}',  [ClientJobController::class, 'Details'])->name('job-details');



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });




require __DIR__.'/auth.php';
