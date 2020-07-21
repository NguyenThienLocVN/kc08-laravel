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
    return view('pages.index');
});

Route::get('trang-chu', function () {
    return view('pages.home');
})->name('trang-chu');


// Du lieu de tai
Route::group([
    'name' => 'du-lieu-de-tai.',
    'prefix' => 'du-lieu-de-tai',
], function () {
    // URL: /du-lieu-de-tai/danh-sach-tram
    // Route name: du-lieu-de-tai.danh-sach-tram
    Route::get('danh-sach-tram', function () {
        return view('pages.du-lieu-de-tai.danh-sach-tram');
    })->name('du-lieu-de-tai.danh-sach-tram');

});