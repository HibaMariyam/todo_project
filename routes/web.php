<?php

use App\Http\Controllers\TodsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodsController::class,'index']);


