<?php

use App\Http\Controllers\MainController;
use App\Http\Middleware\Checar;
use Illuminate\Support\Facades\Route;

Route::get("/", [MainController::class, "index"])->name("index");

Route::middleware(["auth"])->group(function() {
    Route::prefix("/")->group(function () {
        Route::controller(MainController::class)->group(function() {
            Route::get("home", "home")->name("home");
        });
    });
});

Route::fallback(function() {
    return redirect()->route("index");
});