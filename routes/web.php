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
    return view('profile');
})->name('home.profile');

Route::get('/news/{mm}/{dd}/{yyyy}', function ($mm, $dd, $yyyy) {
    return ("<h1>Date : " . $mm . "/" . $dd . "/" . $yyyy . "</h1>");
})->name('home.news');

Route::get('/About/{age?}/{name?}', function ($age = 21, $name = "Jaspearl Clarianes") {
    return ("<h1>I am " . $name . ". " . "I am " . $age . " years old</h1>");
})->name('home.about')->where(['age' => '[0-9]+']);
