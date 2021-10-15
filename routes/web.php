<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Helper\TableStyle;

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
    return view('pages.home');
});

Route::get('widgets', function () {
    return view('pages.widgets');
});

Route::get('charts', function () {
    return view('pages.charts');
});

Route::get('elements', function () {
    return view('pages.elements');
});

Route::get('home-navbar', function () {
    return view('pages.home-navbar');
});

// forms
Route::get('general-elements', function () {
    return view('pages.forms.general');
});

Route::get('advanced-elements', function () {
    return view('pages.forms.advance');
});

Route::get('editors', function () {
    return view('pages.forms.editors');
});

Route::get('validation', function () {
    return view('pages.forms.validation');
});

// TableS
Route::get('simple-tables', function () {
    return view('pages.tables.simple');
});

Route::get('data-tables', function () {
    return view('pages.tables.data');
});

Route::get('js-grid', function () {
    return view('pages.tables.jsGrid ');
});
