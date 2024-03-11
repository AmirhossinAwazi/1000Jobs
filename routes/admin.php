<?php

use App\Http\Controllers\Admin\JobController;
use Illuminate\Support\Facades\Route;

Route::resource('/job', JobController::class);