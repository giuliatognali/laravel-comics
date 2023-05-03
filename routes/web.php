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
    $data = [
        'nav' => config('nav'),
        'comics' => config('comics'),
        'socials' => config('socials'),
        'dc_comics' => config('dc_comics'),
        'dc_shops' => config('dc_shops'),
        'dc_list'=> config('dc_list'),
        'dc_sites'=> config('dc_sites'),
    ];
    return view('home', $data);

})-> name('home');
