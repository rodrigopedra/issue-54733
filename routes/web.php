<?php

use App\Http\Controllers\DemandController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('demands', DemandController::class);
