<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CompanyProfileController;
use App\Http\Controllers\admin\CountryMasterController;
use App\Http\Controllers\admin\StateMasterController;
use App\Http\Controllers\admin\CityMasterController;
use App\Http\Controllers\admin\AmenitiesMasterController;
use App\Http\Controllers\admin\HotelCategoryController;
use App\Http\Controllers\admin\RoomCategoryController;

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


// To autologin Adminer with Laravel default connection:

Route::any('adminer', '\Aranyasen\LaravelAdminer\AdminerAutologinController@index');
// If you want to manually provide credentials on the UI instead:
//Route::any('adminer', '\Aranyasen\LaravelAdminer\AdminerController@index');


Route::get('/', function(){
    return view("pages.landing_pages.landing-page-index")->with(["title" => "Join Us"]);
})->name("/");
Route::get('login', [AuthController::class, "index"])->name("login");
Route::get('logout', [AuthController::class, "logout"])->name("logout");
Route::post('login', [AuthController::class, "login"])->name("login");
Route::get('register', [AuthController::class, "register"])->name("register");
Route::post('register', [AuthController::class, "createUser"])->name("register");
Route::get('invalid-access', [\App\Http\Controllers\admin\ErrorController::class, "invalidAccess"])->name("invalid-access");
Route::get('ensureUserIsActive', [UserController::class, "ensureUserIsActive"])->name("ensureUserIsActive");

Route::group(["middleware" => ['auth', "ensureAccountIsVerified"]], function () {
    Route::get('channel-manager-dashboard', [DashboardController::class, "index"])->name("channel-manager-dashboard");
    Route::get('account-settings', [UserController::class, "editProfile"])->name("account-settings");
    Route::post('update-company-profile', [CompanyProfileController::class, "updateCompanyProfile"])->name("update-company-profile");
    Route::group(["middleware" => ['auth', "ensureAccountIsAdmin"]], function () {
        Route::get('manage-channel', [UserController::class, "channelList"])->name("manage-channel");

        Route::get('country-master', [CountryMasterController::class, "getCountryList"])->name("country-master");
        Route::get('state-master', [StateMasterController::class, "getStateList"])->name("state-master");
        Route::get('city-master', [CityMasterController::class, "getCityList"])->name("city-master");

        Route::get('amenities', [AmenitiesMasterController::class, "getAmenities"])->name("amenities");
        Route::get('hotel-categories', [HotelCategoryController::class, "getHotelCategoryList"])->name("hotel-categories");
        Route::get('room-categories', [RoomCategoryController::class, "getRoomCategoryList"])->name("hotel-categories");

        Route::get('edit-channel-details/{ChannelId}', [UserController::class, "editChannelDetails"])->name("edit-channel-details");

        Route::post('change-user-account-status', [UserController::class, "updateUserStatus"])->name("change-user-account-status");
        Route::post('update-channel-details', [UserController::class, "updateChannelDetails"])->name("update-channel-details");

    });
});
