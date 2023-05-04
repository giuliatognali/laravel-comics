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
        'dc_links'=> config('dc_links')
    ];
    return view('comics', $data);

})-> name('comics');


Route::get('/dettagli/{index}', function ($index) {

    $all_comics = config('comics');

    if($index > count($all_comics) - 1){
        abort(404);
    };
    
    $comics = $all_comics[$index];

    $data = [
        'comics' => $comics,
        'nav' => config('nav'),
        'socials' => config('socials'),
        'dc_comics' => config('dc_comics'),
        'dc_shops' => config('dc_shops'),
        'dc_list'=> config('dc_list'),
        'dc_sites'=> config('dc_sites'),
        'dc_links'=> config('dc_links')
    ];

    return view('detail_comics', $data);

})->where('index', '[0-9]+')-> name('detail_comics');
