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

// Trang chu - Homepage
Route::get('trang-chu', function () {
    return view('pages.trang-chu');
})->name('trang-chu');

// Thong tin chung
Route::group([
    'name' => 'thong-tin-chung.',
    'prefix' => 'thong-tin-chung',
], function () {
    // San pham de tai
    Route::get('san-pham-de-tai', function () {
        return view('pages.thong-tin-chung.san-pham-de-tai');
    })->name('thong-tin-chung.san-pham-de-tai');

    // Chi tiet san pham de tai
    Route::get('san-pham-de-tai/chi-tiet', function () {
        return view('pages.thong-tin-chung.chi-tiet-san-pham-de-tai');
    })->name('thong-tin-chung.chi-tiet-san-pham-de-tai');
});


// Du lieu de tai
Route::group([
    'name' => 'du-lieu-de-tai.',
    'prefix' => 'du-lieu-de-tai',
], function () {
    Route::get('danh-sach-tram', function () {
        return view('pages.du-lieu-de-tai.danh-sach-tram');
    })->name('du-lieu-de-tai.danh-sach-tram');
});