<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\JobController::class, 'index']);
