<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CompanyProfileController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/',[AuthController::class,"index"])->name("/");
Route::get('login',[AuthController::class,"index"])->name("login");
Route::get('logout',[AuthController::class,"logout"])->name("logout");
Route::post('login',[AuthController::class,"login"])->name("login");
Route::get('register',[AuthController::class,"register"])->name("register");
Route::post('register',[AuthController::class,"createUser"])->name("register");


 Route::group(["middleware"=>'auth'],function(){
     Route::get('channel-manager-dashboard',[DashboardController::class,"index"])->name("channel-manager-dashboard");
     Route::get('account-settings',[UserController::class,"editProfile"])->name("account-settings");
     Route::post('update-company-profile',[CompanyProfileController::class,"updateCompanyProfile"])->name("update-company-profile");
 });
