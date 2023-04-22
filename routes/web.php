<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Back\CarController;
use App\Http\Controllers\Back\FuelController;
use App\Http\Controllers\Back\StatController;
use App\Http\Controllers\Back\TypeController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\BrandController;
use App\Http\Controllers\Back\KmlogController;
use App\Http\Controllers\Back\MonthController;
use App\Http\Controllers\Back\GeneralController;
use App\Http\Controllers\Back\CustomerController;
use App\Http\Controllers\Back\IntervalController;
use App\Http\Controllers\Back\DeveloperController;
use App\Http\Controllers\Back\FuelPriceController;
use App\Http\Controllers\Back\DepartmentController;
use App\Http\Controllers\Back\CarConsumptionController;

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
            Route::post('/general/setButonSelectat', 'setButonSelectat')->name('general.setButonSelectat');
            Route::post('/general/setMonthId', 'setMonthId')->name('general.setMonthId');
            Route::post('/general/setBrandId', 'setBrandId')->name('general.setBrandId');
            Route::post('/general/setDepartmentId', 'setDepartmentId')->name('general.setDepartmentId');
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
            Route::get('/users/getDepartmentUsers', 'getDepartmentUsers')->name('users.getDepartmentUsers');
            Route::resource('/users', UserController::class)->except([ 'destroy']);
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
            Route::get('/cars/getDepartmentCars', 'getDepartmentCars')->name('cars.getDepartmentCars');
            Route::delete('/cars/massDestroy', 'massDestroy')->name('cars.massDestroy');
            Route::resource('/cars', CarController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */
        // Brand
        Route::controller(BrandController::class)->group(function () {
            Route::get('/brands/get-brand-types/{brand_id}','getBrandTypes')->name('get-brand-types');
            Route::get('/brands/get-brand-types1','getBrandTypes1')->name('get-brand-types1');
            Route::delete('/brands/massDestroy', 'massDestroy')->name('brands.massDestroy');
            Route::resource('/brands', BrandController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */
        // Fuel
        Route::controller(FuelController::class)->group(function () {
            Route::delete('/fuels/massDestroy', 'massDestroy')->name('fuels.massDestroy');
            Route::resource('/fuels', FuelController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */
        // Kmlog
        Route::controller(KmlogController::class)->group(function () {
            Route::delete('/kmlogs/massDestroy', 'massDestroy')->name('kmlogs.massDestroy');
            Route::resource('/kmlogs', KmlogController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */
        // FuelPrice
        Route::controller(FuelPriceController::class)->group(function () {
            Route::delete('/fuel-prices/massDestroy', 'massDestroy')->name('fuel-prices.massDestroy');
            Route::resource('/fuel-prices', FuelPriceController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */
        // Types
        Route::controller(TypeController::class)->group(function () {
            Route::delete('/types/massDestroy', 'massDestroy')->name('types.massDestroy');
            Route::resource('/types', TypeController::class)->except(['destroy']);
        });
        // Stats
        Route::controller(StatController::class)->group(function () {
            Route::delete('/stats/massDestroy', 'massDestroy')->name('stats.massDestroy');
            Route::resource('/stats', StatController::class)->except(['destroy']);
        });
        // Brand
        Route::controller(MonthController::class)->group(function () {
            Route::post('/months/addNextMonth','addNextMonth')->name('addNextMonth');
            Route::post('/months/inchideDeschideLuna','inchideDeschideLuna')->name('inchideDeschideLuna');
            Route::get('/months/getMonthIntervals','getMonthIntervals')->name('getMonthIntervals');
            Route::delete('/months/massDestroy', 'massDestroy')->name('months.massDestroy');
            Route::resource('/months', MonthController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */
        // Intervals
        Route::controller(IntervalController::class)->group(function () {
            Route::delete('/intervals/massDestroy', 'massDestroy')->name('intervals.massDestroy');
            Route::resource('/intervals', IntervalController::class)->except(['destroy']);
        });
         // Departments
         Route::controller(DepartmentController::class)->group(function () {
            Route::get('/departments/get-cars/{department_id}','getCars')->name('get-cars');
            Route::get('/departments/get-users/{department_id}','getUsers')->name('get-users');
            Route::delete('/departments/massDestroy', 'massDestroy')->name('departments.massDestroy');
            Route::resource('/departments', DepartmentController::class)->except(['destroy']);
        });
         // CarConsumptions
         Route::controller(CarConsumptionController::class)->group(function () {
            Route::get('/car_consumptions/get-car_consumptions','getCarConsumptions')->name('get-car_consumptions');
        });
   });
});
