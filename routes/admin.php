<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\StatisticController;
use Illuminate\Support\Facades\Route;

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

Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/dologin', [AdminController::class, 'dologin'])->name('admin.dologin');


Route::middleware('isAdmin:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::resource('settings', SettingController::class)->only('index', 'show', 'update', 'edit');
    Route::resource('features', FeatureController::class);
    Route::resource('social-links', SocialLinkController::class)->except('create','store');
    Route::resource('statistics', StatisticController::class);
    Route::resource('news', NewsController::class)->only('index' ,'destroy');
});
