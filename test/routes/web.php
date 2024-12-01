<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ['App\Http\Controllers\SiteController', 'index']);
