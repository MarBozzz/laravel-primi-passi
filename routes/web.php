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
    $wave = 'Hello';
    $subject = 'World';


    return view('home', ['wave'=>$wave], ['subject'=>$subject]);
});

Route::get('/chi-siamo', function () {
    $fruits = ['apple', 'pear', 'banana', 'pineapple', 'mango'];
    return view('about', compact('fruits'));
});
