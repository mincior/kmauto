<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Back\CarController;
use App\Http\Controllers\Back\FuelController;
use App\Http\Controllers\Back\TypeController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\BrandController;
use App\Http\Controllers\Back\GeneralController;
use App\Http\Controllers\Back\CustomerController;
use App\Http\Controllers\Back\DeveloperController;
use App\Http\Controllers\Back\DepartmentController;

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
            Route::get('/general/get-month-intervals/{anul_luna}', 'getMonthIntervals')->name('get-month-intervals');
            Route::post('/general/setValueDB', 'setValueDB')->name('general.setValueDB');
            Route::post('/general/setValueMonthSelect', 'setValueMonthSelect')->name('general.setValueMonthSelect');
            Route::post('/general/setValueIntervalSelect', 'setValueIntervalSelect')->name('general.setValueIntervalSelect');
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
            Route::get('/cars/autocomplete',  'autoComplete')->name('autoComplete');
            Route::delete('/cars/massDestroy', 'massDestroy')->name('cars.massDestroy');
            Route::resource('/cars', CarController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */
        // Brand
        Route::controller(BrandController::class)->group(function () {
            Route::get('/brands/get-brand-types/{brand_id}','getBrandTypes')->name('get-brand-types');
            Route::delete('/brands/massDestroy', 'massDestroy')->name('brands.massDestroy');
            Route::resource('/brands', BrandController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */
        // Types
        Route::controller(TypeController::class)->group(function () {
            Route::delete('/types/massDestroy', 'massDestroy')->name('types.massDestroy');
            Route::resource('/types', TypeController::class)->except(['destroy']);
        });
         // Departments
         Route::controller(DepartmentController::class)->group(function () {
            Route::get('/departments/get-cars/{department_id}','getCars')->name('get-cars');
            Route::get('/departments/get-users/{department_id}','getUsers')->name('get-users');
            Route::delete('/departments/massDestroy', 'massDestroy')->name('departments.massDestroy');
            Route::resource('/departments', DepartmentController::class)->except(['destroy']);
        });
         // Fuels
         Route::controller(FuelController::class)->group(function () {
            Route::get('/fuels/get-fuels','getFuels')->name('get-fuels');
            Route::post('/fuels/save-fuels','saveFuels')->name('save-fuels');
        });
   });
});
