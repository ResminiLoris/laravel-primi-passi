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
        'name' => 'loris',
        'surname' => 'resmini'
    ];
    return view('home', $data);
});

Route::get('contatti', function () {
    return view('contatti');
})->name('contatti');

Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('social', function () {
    return view('social');
})->name('social');

Route::get('blog', function () {
    return view('blog');
})->name('blog');
