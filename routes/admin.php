<?php

use App\Http\Controllers\Admin\JobController;
use Illuminate\Routing\Route;

Route::resource('/job', [JobController::class, 'index']);