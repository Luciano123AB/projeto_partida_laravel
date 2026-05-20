<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\Check;
use Illuminate\Support\Facades\Route;

Route::prefix("/")->group(function () {
    Route::get("", [MainController::class, "index"])->name("index");

    Route::middleware(["auth", "verified"])->group(function() {
        Route::controller(MainController::class)->group(function() {
            Route::get("home", "home")->name("home");
        });

        Route::middleware(Check::class)->group(function() {
            Route::controller(AuthController::class)->group(function() {
                Route::put("update", "update")->name("update");
                Route::delete("delete", "delete")->name("delete");
            });
        });
    });
});

Route::fallback(function() {
    return redirect()->route("index");
});