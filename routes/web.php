<?php

use App\Http\Controllers\DriveinController;
use App\Http\Controllers\DashdriveoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// payment redirected with get
Route::get('main/{id}', 'App\http\Controllers\MainController@show');

Route::get('', 'App\http\Controllers\MainController@index');

// user_pages
Route::get('/driveIn', 'App\http\Controllers\DriveinController@index');
// Route::get('/driveOut', 'App\http\Controllers\DriveoutController@show');
Route::get('/driveOut', 'App\http\Controllers\DriveoutController@index');

// user page -> entry
Route::post('/driveIn', 'App\http\Controllers\DriveinController@store');
Route::post('/driveOut', 'App\http\Controllers\DriveoutController@update');

Route::get('/pay', function ()  {
    return view('user/payment');
});

// dashboards
Route::group(['middleware','preventBackHistory'],function () {//prevents back after logout
Route::post('/dashoutup', 'App\http\Controllers\DashdriveoutController@out')->name('dashout');
Route::get('/dashout', 'App\http\Controllers\DashdriveoutController@index')->name('dashout');
Route::get('/history', 'App\http\Controllers\HistoryController@index')->name('history');
Route::get('/report', 'App\http\Controllers\ReportController@index')->name('report');
Route::get('/rate', 'App\http\Controllers\RateController@index')->name('rate');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('main/login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

//UPDATE RATE
Route::post('/rate', 'App\http\Controllers\RateController@update');

Auth::routes();




// calculations
Route::post('/maths', 'App\http\Controllers\CalcController@maths');