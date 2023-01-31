<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cv', function() { return response()->file(storage_path("app\public\curriculum_vitae_maxime_sickenberg.pdf")); })->name('curriculum vitae');
Route::get('/cv_print', function() { return response()->file(storage_path("app\public\curriculum_vitae_maxime_sickenberg_print.pdf")); })->name('curriculum vitae');
