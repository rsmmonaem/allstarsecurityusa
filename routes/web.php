<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SeoPageController;
// use App\Http\Controllers\SuperAdmin\PageController;
use App\Http\Controllers\FrontendController;
// use App\Http\Controllers\SuperAdmin\SeoPageController;
use App\Http\Controllers\HeaderMenuController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\PageCategoryController;
use App\Http\Controllers\PageAdditionalInfoController;
use Spatie\Permission\Contracts\Role;

Route::get('/link', function () {
    try {
        Artisan::call('storage:link');
        return "The storage link has been created successfully.";
    } catch (\Exception $e) {
        return "Failed to create the storage link: " . $e->getMessage();
    }
});


Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('loginProcess');
Route::get('/register', [AuthController::class, 'signUp'])->name('register');
Route::post('/register', [AuthController::class, 'signUpProcess'])->name('registerProcess');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// Super Admin Routes
Route::group(['middleware' => ['role:super-admin']], function () {
    Route::get('/super-admin', [SuperAdminController::class, 'index'])->name('super-admin');

    // User routes
    Route::get('admin/all-customers', [UserController::class, 'customers'])->name('admin.customers.index');
    Route::get('admin/all-agents', [UserController::class, 'agents'])->name('admin.agents.index');
    Route::get('admin/all-users', [UserController::class, 'all_users'])->name('admin.users.index');
});



// Admin Routes
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', [AdminController::class, 'index']);
});

// Agent Routes
Route::group(['middleware' => ['role:agent']], function () {
    Route::get('/agent', [AgentController::class, 'index']);
});

// User Routes
Route::group(['middleware' => ['role:user']], function () {
    Route::get('/user', [UserController::class, 'index'])->name('user');
});


Route::resource('pages', PageController::class);
Route::resource('page-additional-info', PageAdditionalInfoController::class);

Route::resource('seo-pages', SeoPageController::class);
Route::resource('header-menus', HeaderMenuController::class);
Route::resource('media', MediaController::class);
Route::resource('page-categories', PageCategoryController::class);
Route::get('page/{category_id}/{page_id}', [FrontendController::class, 'master_page'])->name('page.master');

Route::resource('contact-us', ContactController::class);
Route::get('contact_massag_show/{id}',[ContactController::class,'contact_massag_show'])->name('contact.show');
