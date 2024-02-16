<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('/tests')->name('tests.')->group(function () {
    Route::post('/hello', function (Request $request) {
        return "<div id=\"parent-div\"> Hello World </div>";
    })->name('hello');
});
