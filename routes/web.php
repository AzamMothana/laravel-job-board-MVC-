<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/new', function () {
    return view('new');
});

Route::get('/job', [JobController::class , 'index']);
