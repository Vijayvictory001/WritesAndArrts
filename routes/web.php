<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\AuthenticationController;


// Home Controller
Route::get("/", [HomeController::class, "Index"]);
Route::get("/about", [HomeController::class, "About"]);
Route::get("/contact-us", [HomeController::class, "ContactUsView"]) -> name("ContactUsView");


// Authentication Controller
Route::prefix('auth')->group(function () {
    Route::get("/loginview",[AuthenticationController::class, "LoginView"]) -> name('LoginView');
    Route::get("/login",[AuthenticationController::class, "LoginView"]) -> name('LoginView');
    Route::get("/registerview",[AuthenticationController::class, "RegisterView"]) -> name('RegisterView');
    Route::get("/register",[AuthenticationController::class, "RegisterView"]) -> name('RegisterView');
    Route::post("/register",[AuthenticationController::class, "Register"]) -> name('Register');
    Route::post("/login",[AuthenticationController::class, "Login"]) -> name('Login');
    Route::get("/logout", [AuthenticationController::class, "Logout"]) -> name("Logout");
});


// Magazine Controller
Route::prefix('magazine')->group(function () {
    Route::get("/view", [MagazineController::class, "MagazineView"]) -> name('MagazineView');
    Route::get("/upload",[MagazineController::class,'UploadView']) -> name('UploadView');
    Route::post("/upload",[MagazineController::class,'UploadMagazine']) -> name('UploadMagazine');
    Route::get("/delete/{id}",[MagazineController::class,'DeleteMagazine']) -> name('DeleteMagazine');
    Route::get("/view/{id}", [MagazineController::class, "ViewMagazine"]) -> name('ViewMagazine');
    Route::get("/download/{id}", [MagazineController::class, "DownloadMagazine"]) -> name('DownloadMagazine');
});
