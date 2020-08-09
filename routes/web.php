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
    // Muc tieu de tai
    Route::get('muc-tieu-de-tai', function () {
        return view('pages.thong-tin-chung.muc-tieu-de-tai');
    })->name('thong-tin-chung.muc-tieu-de-tai');

    // San pham de tai
    Route::get('san-pham-de-tai', function () {
        return view('pages.thong-tin-chung.san-pham-de-tai');
    })->name('thong-tin-chung.san-pham-de-tai');

    // Chi tiet san pham de tai
    Route::get('san-pham-de-tai/chi-tiet', function () {
        return view('pages.thong-tin-chung.chi-tiet-san-pham-de-tai');
    })->name('thong-tin-chung.chi-tiet-san-pham-de-tai');

    // Dong gop moi cua de tai
    Route::get('dong-gop-moi-de-tai', function () {
        return view('pages.thong-tin-chung.dong-gop-moi-de-tai');
    })->name('thong-tin-chung.dong-gop-moi-de-tai');
});

// Khu vuc nghien cuu
Route::group([
    'name' => 'khu-vuc-nghien-cuu.',
    'prefix' => 'khu-vuc-nghien-cuu',
], function () {
    // Vi tri dia ly
    Route::get('vi-tri-dia-ly', function () {
        return view('pages.khu-vuc-nghien-cuu.vi-tri-dia-ly');
    })->name('khu-vuc-nghien-cuu.vi-tri-dia-ly');

    // Dac diem dia hinh
    Route::get('dac-diem-dia-hinh', function () {
        return view('pages.khu-vuc-nghien-cuu.dac-diem-dia-hinh');
    })->name('khu-vuc-nghien-cuu.dac-diem-dia-hinh');

    // Tho nhuong
    Route::get('tho-nhuong', function () {
        return view('pages.khu-vuc-nghien-cuu.tho-nhuong');
    })->name('khu-vuc-nghien-cuu.tho-nhuong');

    // Tham phu thuc vat
    Route::get('tham-phu-thuc-vat', function () {
        return view('pages.khu-vuc-nghien-cuu.tham-phu-thuc-vat');
    })->name('khu-vuc-nghien-cuu.tham-phu-thuc-vat');

    // He thong song ngoi
    Route::get('he-thong-song-ngoi', function () {
        return view('pages.khu-vuc-nghien-cuu.he-thong-song-ngoi');
    })->name('khu-vuc-nghien-cuu.he-thong-song-ngoi');
});


// Du lieu de tai
Route::group([
    'name' => 'du-lieu-de-tai.',
    'prefix' => 'du-lieu-de-tai',
], function () {
    Route::get('danh-sach-tram', 'StationController@index')->name('du-lieu-de-tai.danh-sach-tram');

    Route::get('danh-sach-tram/{id}','StationController@getRain')->name('get-rain-by-id');

    Route::get('so-lieu-quan-trac', function () {
        return view('pages.du-lieu-de-tai.so-lieu-quan-trac');
    })->name('du-lieu-de-tai.so-lieu-quan-trac');
});

// Hien tuong sat lo bo song
Route::get('hien-tuong-sat-lo', function () {
    return view('pages.hien-tuong-sat-lo');
})->name('hien-tuong-sat-lo');