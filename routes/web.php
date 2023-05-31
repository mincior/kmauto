<?php
//Begin craft placeholder #1

use App\Http\Controllers\Back\CarAsigController;
use App\Http\Controllers\Back\CarStatValueController;
use App\Http\Controllers\Back\CarPropValueController;
use App\Http\Controllers\Back\CarAsigValueController;
use App\Http\Controllers\Back\CarPropController;
use App\Http\Controllers\Back\CarStatController;
use App\Http\Controllers\Back\ExpireController;
use App\Http\Controllers\Back\RevisionController;
use App\Http\Controllers\Back\CarsecondController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Back\CarController;
use App\Http\Controllers\Back\FuelController;
use App\Http\Controllers\Back\StatController;
use App\Http\Controllers\Back\TypeController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\BrandController;
use App\Http\Controllers\Back\KmlogController;
use App\Http\Controllers\Back\MonthController;
use App\Http\Controllers\Back\ImportController;
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
    Route::controller(ImportController::class)->group(function () {
        //for visiting the form page
        Route::get('back/excel/view-upload-form', 'viewUploadForm')->name('view-upload-form');
        //for uploading to database
        Route::post('back/excel/excel-upload', 'excelUpload')->name('excel-upload');
        //we have to create <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-vivid-red-color">FileManagerController</mark>
    });

    Route::controller(ImageController::class)->group(function () {
        Route::get('/image-upload', 'index')->name('image.form');
        Route::post('/upload-image', 'storeImage')->name('image.store');
    });
    // Frontend routes
    Route::prefix('front')->as('front.')->group(function () {
        // Nothing here yet
    });
    // Backend routes
    Route::prefix('back')->as('back.')->group(function () {
        //Begin craft placeholder #2

        //CarAsig
        Route::controller(CarAsigController::class)->group(function () {
            Route::delete('/car-asigs/massDestroy', 'massDestroy')->name('car-asigs.massDestroy');
            Route::resource('/car-asigs', CarAsigController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */

        //CarStatValue
        Route::controller(CarStatValueController::class)->group(function () {
            Route::delete('/car-stat-values/massDestroy', 'massDestroy')->name('car-stat-values.massDestroy');
            Route::resource('/car-stat-values', CarStatValueController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */

        //CarPropValue
        Route::controller(CarPropValueController::class)->group(function () {
            Route::delete('/car-prop-values/massDestroy', 'massDestroy')->name('car-prop-values.massDestroy');
            Route::resource('/car-prop-values', CarPropValueController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */

        //CarAsigValue
        Route::controller(CarAsigValueController::class)->group(function () {
            Route::delete('/car-asig-values/massDestroy', 'massDestroy')->name('car-asig-values.massDestroy');
            Route::resource('/car-asig-values', CarAsigValueController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */

        //CarProp
        Route::controller(CarPropController::class)->group(function () {
            Route::delete('/car-props/massDestroy', 'massDestroy')->name('car-props.massDestroy');
            Route::resource('/car-props', CarPropController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */

        //CarStat
        Route::controller(CarStatController::class)->group(function () {
            Route::delete('/car-stats/massDestroy', 'massDestroy')->name('car-stats.massDestroy');
            Route::resource('/car-stats', CarStatController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */

        //Expire
        Route::controller(ExpireController::class)->group(function () {
            Route::delete('/expires/massDestroy', 'massDestroy')->name('expires.massDestroy');
            Route::resource('/expires', ExpireController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */


        //Revision
        Route::controller(RevisionController::class)->group(function () {
            Route::delete('/revisions/massDestroy', 'massDestroy')->name('revisions.massDestroy');
            Route::resource('/revisions', RevisionController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */

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
            Route::post('/general/setCarId', 'setCarId')->name('general.setCarId');
            Route::post('/general/setUserId', 'setUserId')->name('general.setUserId');
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
            Route::resource('/users', UserController::class)->except(['destroy']);
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
        // Carsecond
        Route::controller(CarsecondController::class)->group(function () {
            Route::delete('/carseconds/massDestroy', 'massDestroy')->name('carseconds.massDestroy');
            Route::resource('/carseconds', CarsecondController::class)->except(['destroy']);
        });
        /* ---------------------------------------- */
        // Brand
        Route::controller(BrandController::class)->group(function () {
            Route::get('/brands/get-brand-types/{brand_id}', 'getBrandTypes')->name('get-brand-types');
            Route::get('/brands/get-brand-types1', 'getBrandTypes1')->name('get-brand-types1');
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
            Route::post('/kmlogs/muta', 'muta')->name('kmlogs.muta');
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
            Route::post('/months/addNextMonth', 'addNextMonth')->name('addNextMonth');
            Route::post('/months/inchideDeschideLuna', 'inchideDeschideLuna')->name('inchideDeschideLuna');
            Route::get('/months/getMonthIntervals', 'getMonthIntervals')->name('getMonthIntervals');
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
            Route::get('/departments/get-cars/{department_id}', 'getCars')->name('get-cars');
            Route::get('/departments/get-users/{department_id}', 'getUsers')->name('get-users');
            Route::delete('/departments/massDestroy', 'massDestroy')->name('departments.massDestroy');
            Route::resource('/departments', DepartmentController::class)->except(['destroy']);
        });
        // CarConsumptions
        Route::controller(CarConsumptionController::class)->group(function () {
            Route::get('/car_consumptions/get-car_consumptions', 'getCarConsumptions')->name('get-car_consumptions');
        });
    });
});
