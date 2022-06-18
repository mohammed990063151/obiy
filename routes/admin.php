<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\User_PostController;
use App\Http\Controllers\Dashboard\CategoiresController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\ClientController;

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
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
function () {




   
    Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {

    Route::get("/index" , [DashboardController::class, "index"])->name('index');

Route::resource('users', User_PostController::class)->except(['show']);


 //category routes
 Route::resource('categories', CategoiresController::class)->except(['show']);


 Route::resource('products', ProductController::class)->except(['show']);

            //client routes
            Route::resource('clients', ClientController::class)->except(['show']);
            Route::resource('clients.orders', Client\OrderController::class)->except(['show']);

            //order routes
            Route::resource('orders', OrderController::class);
            // Route::get('/orders/{order}/products', OrderController@products::class)->name('orders.products');


            //user routes
            Route::resource('users', UserController::class)->except(['show']);







});//end of dasboard routes
});

// });

