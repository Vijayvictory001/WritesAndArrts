<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MagazineController;

Route::get("/", [MagazineController::class, "Index"]);
Route::get("/about", [MagazineController::class, "About"]);
Route::get("/view-magazine", [MagazineController::class, "ViewMagazine"]);
Route::get("/download-magazine", [MagazineController::class, "DownloadMagazine"]);