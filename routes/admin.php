<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AboutUsPagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MenuController as MenuPage;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Check2faController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\TestimonialController;
Route::controller(AdminAuthController::class)->group(function () {
    Route::post('/admin/login/submit', 'store')->name('admin.login.submit');
    Route::get('/admin/login', 'showLogin')->name('admin.login');
    Route::post('/logouts', 'logout')->name('admin.logout');
});
Route::get('/admin/2fa', [Check2faController::class, 'Index'])->name('check2fa');
Route::post('/admin/2fa/verify/', [Check2faController::class, 'VerifyCode'])->name('admin.VerifyCodes');
Route::group(['prefix' => 'manage', 'as' => 'admin.'], function () {
    Route::middleware(['auth:admin'])->group(function () {
        Route::middleware(['check2fa'])->group(function () {
            Route::get('/', [AdminDashboardController::class, 'Index'])->name('index');
            Route::get('/index', [AdminDashboardController::class, 'Index'])->name('index');
            Route::controller(MenuPage::class)->group(function () {
                Route::get('/website/menus', 'Index')->name('menu.index');
                Route::get('/website/menu/create',  'Create')->name('addMenu');
                Route::post('/website/menu/store', 'Store')->name('MenuStore');
                Route::get('/menu/edit/{id}', 'Edit')->name('menu.edit');
                Route::post('/website/menu/update/{id}',  'Update')->name('MenuUpdate');
                Route::get('/website/menu/disable/{id}',  'Disable')->name('MenuDisable');
                Route::get('/website/menu/enable/{id}',  'Enable')->name('MenuEnable');
                Route::get('/website/submenu/create/{id}',  'SubMenuCreate')->name('subMenu.Create');
                Route::post('/website/submenu/store/{id}', 'SubMenuStore')->name('SubMenuStore');
                Route::get('/website/submenu/edit/{id}',  'SubMenuEdit')->name('subMenu.edit');
                Route::post('/website/submenu/update/{id}', 'SubMenuUpdate')->name('SubMenuUpdate');
                Route::get('/website/submenu/delete/{id}',  'SubMenuDelete')->name('subMenu.delete');
            });

            Route::controller(AboutUsPagesController::class)->group(function () {
                Route::get('/website/aboutpage', 'Index')->name('pages.index');
                Route::get('/website/aboutpage/edit/{id}',  'AboutUsPagesEdit')->name('PagesEdit');
                Route::post('/website/aboutpage/update/{id}', 'AboutUsPagesUpdate')->name('PagesUpdate');
            });

            Route::controller(BlogController::class)->group(function () {
                Route::get('/wesite/blog', 'Index')->name('blogs.index');
                Route::get('/wesite/blog/create', 'BlogsCreate')->name('BlogsCreate');
                Route::post('/website/blog/store', 'BlogsStore')->name('BlogsStore');
                Route::get('/website/blog/edit/{id}', 'BlogsEdit')->name('BlogsEdit');
                Route::post('/website/blog/update/{id}', 'BlogsUpdate')->name('BlogsUpdate');
                Route::get('/wensite/blog/delete/{id}', 'BlogsDelete')->name('BlogsDelete');
                Route::get('/website/blog/activate/{id}', 'BlogsActivate')->name('BlogsActivate');
                Route::get('/webiste/blog/diabled/{id}', 'BlogsDisable')->name('BlogsDisable');
            });



            Route::controller(SettingsController::class)->group(function () {
                Route::get('/website/settings/index', 'Index')->name('settings.index');
                Route::get('/website/settings/socials', 'Socials')->name('settings.socials');
                Route::get('/website/settings/about', 'Abouts')->name('settings.abouts');
                Route::post('/website/settings/update/settings', 'UpdateSettings')->name('settings.updateSettings');
                Route::get('/website/admin/user', 'UserAccount')->name('userAccount');
                Route::post('/website/admin/uuser/account', 'UpdateAccount')->name('UpdateAccount');
                Route::post('/website/settings/update/socials', 'UpdateSocials')->name('settings.updateSocials');
            });

            Route::controller(SliderController::class)->group(function () {
                Route::get('/website/settings/sliders/index', 'Index')->name('settings.sliders');
                Route::get('/website/settings/sliders/create', 'CreateSlider')->name('sliderCreate');
                Route::post('/website/settings/sliders/store', 'StoreSlider')->name('sliderStore');
                Route::get('/website/settings/sliders/edit/{id}', 'EditSlider')->name('sliderEdit');
                Route::post('/website/settings/sliders/update/{id}', 'UpdateSlider')->name('sliderUpdate');
                Route::get('/website/settings/sliders/delete/{id}', 'DeleteSlider')->name('sliderDelete');
                Route::get('/website/settings/sliders/activate/{id}', 'ActivateSlider')->name('sliderActivate');
                Route::get('/website/settings/sliders/deactivate/{id}', 'DeactivateSlider')->name('sliderDeactivate');
            });

            Route::controller(TestimonialController::class)->group(function () {
                Route::get('/website/settings/testimonias', 'Testimonials')->name('settings.testimonials');
                Route::get('/website/settings/add/testimonial', 'CreateTestimonial')->name('settings.createTestimonial');
                Route::post('/website/settings/store/testimonial', 'StoreTestimonial')->name('settings.storeTestimonial');
                Route::get('/website/settings/edit/testimonial/{id}', 'EditTestimonial')->name('settings.editTestimonial');
                Route::post('/website/settings/update/testimonial/{id}', 'UpdateTestimonial')->name('settings.updateTestimonial');
                Route::get('/website/settings/delete/testimonial/{id}', 'DeleteTestimonial')->name('settings.deleteTestimonial');
            });

            Route::resource('/goals', GoalsController::class);
            Route::get('/goals/delete/{id}', [GoalsController::class, 'delete'])->name('goals.delete');
            Route::resource('/donation', DonationController::class);
            Route::get('donations/donors/{donationCategoryId}', [DonationController::class, 'Donors'])->name('donation.donors');
            Route::resource('/events', EventsController::class);

            Route::controller(GalleryController::class)->group(function () {
                Route::get('/galleries/index', 'Index')->name('galleries.index');
                Route::get('/galleries/create', 'Create')->name('galleries.create');
                Route::post('/galleries/store', 'Store')->name('galleries.store');
                Route::get('/galleries/delete/{gallery_id}', 'Delete')->name('galleries.delete');
            });

            Route::controller(TeamsController::class)->group(function () {
                Route::get('/teams/index', 'Index')->name('teams.index');
                Route::get('/teams/create', 'Create')->name('teams.create');
                Route::post('/teams/store', 'Store')->name('teams.store');
                Route::get('teams/edit/{teams_id}', 'Edit')->name('teams.edit');
                Route::post('teams/update/{teams_id}', 'Update')->name('teams.update');
                Route::get('/teams/delete/{gallery_id}', 'Delete')->name('teams.delete');
            });
        });
    });
});
