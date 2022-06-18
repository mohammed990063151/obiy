<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\User_PostController;

// use Config\LaravelLocalization;

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

// Route::get('/', function () {
//     return view('admin.index');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');



   
    Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
// Route::prefix('dashboard')->name('dashboard.')->group(function(){
    Route::get("/index" , [DashboardController::class, "index"])->name('index');

// route::resource("users" ,[User_PostController::class,"index"]);
// Route::resource('users', 'User_PostController');
Route::resource('users', User_PostController::class)->except(['show']);













});//end of dasboard routes
});

// });

