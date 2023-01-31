<?php

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/get/name', function(){ return response(json_encode("Maxime Sickenberg"), 200); });
Route::get('/get/age', function(){
    $age = Carbon::parse("2001-04-10")->age; 
    return response(json_encode("{$age} Year old"), 200); 
});
Route::get('/get/email', function(){ return response(json_encode("maxime.sickenberg@gmail.com"), 200); });

Route::get('/get/languages', function(){
    return response(
        json_encode([
            ['Php','Laravel'],
            ['Phyton','NumPy', 'Pandas', 'BeautifulSoup', 'Pillow', 'Tkinter', 'OpenCV'],
            ['Javascript', 'JQuery', 'Vue.js', 'React', 'Angular'],
            ['CSS', 'Bootstrap', 'Tailwindcss'],
            ['C#', 'ASP.NET Core', 'WinFrom', 'Flutter'],
            ['Other','HTML', 'Java', 'SQL']
        ]), 200);
});

Route::get('/get/software', function(){
    return response(
        json_encode([
            ['Docker'],
            ['Drupal'],
            ['WordPress'],
            ['Webflow'],
            ['Prestashop'],
            ['Figma'],
            ['Adobe XD']
        ]), 200);
});

Route::get('/get/experience', function(){
    return response(json_encode([
        ['Elite SA'],
        ['Solmani SA'],
        ['ETML']
    ]), 200);
});

