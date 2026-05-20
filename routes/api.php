<?php

use App\Http\Controllers\ApiController;
use App\Services\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix("/")->group(function () {
    Route::middleware(["auth:sanctum", "verified"])->group(function () {
        Route::get("/status", function() {
            return ApiResponse::success("API is running.");
        });

        Route::apiResource("users", ApiController::class);
    });
});