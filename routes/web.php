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
    $page_title = "Laravel world";
    $hello_message = "Ready to start!";
    return view('home', compact('page_title', 'hello_message'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/team', function () {
    return view('team');
});


