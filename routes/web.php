<?php

use App\Http\Controllers\CaptchaServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaterkitController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AuthenticationController;

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

Route::get('lang/{locale}', [LanguageController::class, 'swap']);

//front pages routes
Route::get('/test', [FrontController::class, 'test'])->name('home');



Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/services', [FrontController::class, 'services'])->name('front.services');
Route::get('/about', [FrontController::class, 'aboutUs'])->name('about-us');
Route::get('/projects', [FrontController::class, 'projects'])->name('front.projects');
Route::get('/project_details/{id}', [FrontController::class, 'projectDetails'])->name('project_details');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontController::class, 'send'])->name('contact.send');
Route::post('/contact/m', [FrontController::class, 'sendM'])->name('contact.sendM');
Route::get('/pages/{link}', [FrontController::class, 'pageDetails'])->name('page_details');

Route::get('/contact-form', [CaptchaServiceController::class, 'index']);
Route::post('/captcha-validation', [CaptchaServiceController::class, 'capthcaFormValidate']);
Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);

// login routes
Auth::routes();
Route::get('loginn', [AuthenticationController::class, 'login_v2'])->name('auth-login-v2');

Route::middleware('auth')->group(function () {


//Admin Dashboard pages routes
    Route::get('admin', [StaterkitController::class, 'home'])->name('home');
    Route::get('home', [StaterkitController::class, 'home'])->name('home');

// Route Components
    Route::get('layouts/collapsed-menu', [StaterkitController::class, 'collapsed_menu'])->name('collapsed-menu');
    Route::get('layouts/full', [StaterkitController::class, 'layout_full'])->name('layout-full');
    Route::get('layouts/without-menu', [StaterkitController::class, 'without_menu'])->name('without-menu');
    Route::get('layouts/empty', [StaterkitController::class, 'layout_empty'])->name('layout-empty');
    Route::get('layouts/blank', [StaterkitController::class, 'layout_blank'])->name('layout-blank');
    Route::get('dashboard/home-page', [StaterkitController::class, 'home_page'])->name('home-page');
    Route::get('dashboard/about', [StaterkitController::class, 'about'])->name('about');
    Route::put('dashboard/home-page', [StaterkitController::class, 'updateHome'])->name('settings.update.home');
    Route::put('dashboard/about', [StaterkitController::class, 'updateAbout'])->name('settings.update.about');
    Route::put('dashboard/covers', [StaterkitController::class, 'updateCover'])->name('settings.updateCover');

    Route::get('dashboard/contact', [StaterkitController::class, 'contact_mails'])->name('contact-mails');
    Route::get('dashboard/contact/{id}', [StaterkitController::class, 'show'])->name('contact.show');
    Route::get('dashboard/contact{id}/delete', [StaterkitController::class, 'destroy'])->name('contact.delete');

    Route::get('dashboard/sliders', [SliderController::class, 'sliders'])->name('sliders');
    Route::get('dashboard/sliders/create', [SliderController::class, 'create'])->name('sliders.create');
    Route::post('dashboard/sliders/create', [SliderController::class, 'store'])->name('sliders.store');
    Route::get('dashboard/sliders/{id}', [SliderController::class, 'edit'])->name('sliders.edit');
    Route::put('dashboard/sliders/{id}', [SliderController::class, 'update'])->name('sliders.update');
    Route::get('dashboard/sliders/{id}/delete', [SliderController::class, 'destroy'])->name('sliders.destroy');

    Route::get('dashboard/categories', [CategoryController::class, 'index'])->name('categories');
    Route::get('dashboard/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('dashboard/categories/create', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('dashboard/categories/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('dashboard/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('dashboard/categories/{id}/delete', [CategoryController::class, 'destroy'])->name('categories.destroy');

    Route::get('dashboard/services', [ServicesController::class, 'index'])->name('services');
    Route::get('dashboard/services/create', [ServicesController::class, 'create'])->name('services.create');
    Route::post('dashboard/services/create', [ServicesController::class, 'store'])->name('services.store');
    Route::get('dashboard/services/{id}', [ServicesController::class, 'edit'])->name('services.edit');
    Route::put('dashboard/services/{id}', [ServicesController::class, 'update'])->name('services.update');
    Route::get('dashboard/services/{id}/delete', [ServicesController::class, 'destroy'])->name('services.destroy');

    Route::get('dashboard/projects', [ProjectsController::class, 'index'])->name('projects');
    Route::get('dashboard/projects/create', [ProjectsController::class, 'create'])->name('projects.create');
    Route::post('dashboard/projects/create', [ProjectsController::class, 'store'])->name('projects.store');
    Route::get('dashboard/projects/{id}', [ProjectsController::class, 'edit'])->name('projects.edit');
    Route::put('dashboard/projects/{id}', [ProjectsController::class, 'update'])->name('projects.update');
    Route::get('dashboard/projects/{id}/delete', [ProjectsController::class, 'destroy'])->name('projects.destroy');

    Route::get('dashboard/projects-page', [StaterkitController::class, 'projects_page'])->name('projects-page');

    Route::get('dashboard/all-pages', [StaterkitController::class, 'all_pages'])->name('all-pages');
    Route::get('dashboard/Add-page', [StaterkitController::class, 'add_page'])->name('add-page');
    Route::post('dashboard/Add-page', [StaterkitController::class, 'store'])->name('addPage');
    Route::get('dashboard/pages/{id}/edit', [StaterkitController::class, 'edit'])->name('page.edit');
    Route::put('dashboard/pages/{id}/edit', [StaterkitController::class, 'updatePage'])->name('page.update');
    Route::get('dashboard/pages/{id}/delete', [StaterkitController::class, 'delete'])->name('page.delete');

    Route::get('dashboard/settings', [StaterkitController::class, 'settings'])->name('settings');
    Route::put('sittings', [StaterkitController::class, 'update'])->name('settings.update');
    Route::post('changePassword', [StaterkitController::class, 'changePassword'])->name('changePassword');
    Route::put('proj_details', [StaterkitController::class, 'projDetails'])->name('projDetails');
// locale Route
});
