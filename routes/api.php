<?php

use Illuminate\Support\Facades\Route;

Route::get("/status", function() {
    return response()->json(
        [
            "status" => "ok",
            "message" => "API is running OK!"
        ],
        200
    );
});
