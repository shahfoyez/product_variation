<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ProductController;


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
Route::get('/landing', function(){
    return view('landing');
});
Route::middleware(['guest'])->group(function () {
    Route::controller(SessionController::class)->group(function () {
        Route::get('/', 'loginCreate')->name('login');
        Route::post('/createAccount', 'createAccount');
        Route::post('/session', 'check');
    });
});
// auth Middleware Group
Route::middleware(['auth'])->group(function () {
    // GeneralController Group
    Route::controller(GeneralController::class)->group(function () {
        Route::get('/dashboard', 'index');
        Route::get('/summery/table', 'logbook');
        Route::get('/summery/filter', 'summeryFilter');


        Route::get('/product/productAdd', 'productAdd');
        // Route::get('/vehicleByRoute/{rout}', 'vehicleByRoute');
    });


    // VehicleManagementController Group
    Route::controller(ProductController::class)->group(function () {
        Route::get('/product/products', 'show');
        Route::get('/product/productAdd', 'create');
        Route::post('/product/productAdd', 'store');
        // Route::get('/requisition/vehicles', 'reqVehicles');
        // Vehicle EUD
        // Route::get('/vehicle/vehicleEdit/{vehicle}', 'edit');
        // Route::post('/vehicle/vehicleUpdate/{vehicle}', 'update');
        // Route::delete('/vehicle/vehicleDelete/{vehicle}', 'destroy');

        // // Vehicle type
        // Route::get('/vehicle/vehicleTypes', 'vehicleTypes');
        // Route::get('/vehicle/typeAdd', 'typeAdd');
        // Route::post('/vehicle/typeAdd', 'typeStore');
        // // Vehicle type EDU
        // Route::get('/vehicle/typeEdit/{type}', 'typeEdit');
        // Route::post('/vehicle/typeUpdate/{type}', 'typeUpdate');
        // Route::delete('/vehicle/typeDelete/{type}', 'typeDestroy');

        // // Filter
        // Route::get('/vehicle/vehicles/filter', 'filter');
    });
    // logout
    Route::post('/logout', [SessionController::class, 'destroy']);
});
