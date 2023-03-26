<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Back\CarController;
use App\Http\Controllers\Back\TypeController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\BrandController;
use App\Http\Controllers\Back\GeneralController;
use App\Http\Controllers\Back\CustomerController;
use App\Http\Controllers\Back\DeveloperController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::middleware('auth')->group(function () {
    // Frontend routes
    Route::prefix('front')->as('front.')->group(function () {
        // Nothing here yet
    });

    // Backend routes
    Route::prefix('back')->as('back.')->group(function () {
        // General routines
        Route::controller(GeneralController::class)->group(function () {
            Route::post('/general/setValueDB', 'setValueDB')->name('general.setValueDB');
            Route::post('/general/setValueSession', 'setValueSession')->name('general.setValueSession');
            Route::get('/general/getDatatablesHelp', 'getDatatablesHelp')->name('general.getDatatablesHelp');
        });
        /* ---------------------------------------- */
        // Developer
        Route::controller(DeveloperController::class)->group(function () {
            Route::get('/developer/impressum', 'impressum')->name('developer.impressum');
            Route::get('/developer/session', 'session')->name('developer.session');
        });
        /* ---------------------------------------- */
        // Users
        Route::controller(UserController::class)->group(function () {
            Route::get('/users/get-department-users/{department_id}',[UserController::class,'getDepartmentUsers'])->name('get-department-users');
            Route::delete('/users/massDestroy', 'massDestroy')->name('users.massDestroy');
            Route::resource('/users', UserController::class)->except(['show', 'destroy']);
        });
        /* ---------------------------------------- */
        // Customers
        Route::controller(CustomerController::class)->group(function () {
            Route::delete('/customers/massDestroy', 'massDestroy')->name('customers.massDestroy');
            Route::resource('/customers', CustomerController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */
        // Cars
        Route::controller(CarController::class)->group(function () {
            Route::get('/cars/get-department-cars/{department_id}',[CarController::class,'getDepartmentCars'])->name('get-department-cars');
            Route::delete('/cars/massDestroy', 'massDestroy')->name('cars.massDestroy');
            Route::resource('/cars', CarController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */
        // Cars
        Route::controller(BrandController::class)->group(function () {
            Route::get('/brands/get-brand-types/{brand_id}',[BrandController::class,'getBrandTypes'])->name('get-brand-types');
            Route::delete('/brands/massDestroy', 'massDestroy')->name('brands.massDestroy');
            Route::resource('/brands', BrandController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */
        // Types
        Route::controller(TypeController::class)->group(function () {
            Route::delete('/types/massDestroy', 'massDestroy')->name('types.massDestroy');
            Route::resource('/types', TypeController::class)->except(['destroy']);
        });
    });
});
