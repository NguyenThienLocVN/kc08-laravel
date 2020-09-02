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

Route::group(['middleware' => 'guest'], function () {
    Route::get('dang-nhap', 'Auth\LoginController@index')->name('login');
    Route::post('dang-nhap', 'Auth\LoginController@post')->name('post-login');
});

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
    Route::get('san-pham-de-tai', 'SchemeProductController@showAll' )->name('thong-tin-chung.san-pham-de-tai');

    // Chi tiet san pham de tai
    Route::get('san-pham-de-tai/{Scheme_ID}', 'SchemeProductController@getDetail')->name('thong-tin-chung.chi-tiet-san-pham-de-tai');
    // Sua ten san pham de tai
    Route::get('san-pham-de-tai/{Scheme_ID}/edit', 'SchemeProductController@showEdit')->name('thong-tin-chung.sua-san-pham-de-tai');
    Route::post('san-pham-de-tai/{Scheme_ID}/edit', 'SchemeProductController@doEdit');

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
    //So lieu bun cat
    Route::get('so-lieu-bun-cat', 'StationsController@muddySandStations')->name('du-lieu-de-tai.so-lieu-bun-cat');
    Route::get('so-lieu-bun-cat/{id}','StationsController@getMuddySandData');

    // So lieu thuy van
    Route::get('so-lieu-thuy-van', 'StationsController@hydrologicalStations')->name('du-lieu-de-tai.so-lieu-thuy-van');
    Route::get('so-lieu-thuy-van/{id}','StationsController@getRain');

    Route::get('so-lieu-quan-trac', function () {
        return view('pages.du-lieu-de-tai.so-lieu-quan-trac');
    })->name('du-lieu-de-tai.so-lieu-quan-trac');
});



Route::group([
    'name' => 'hien-trang-sat-lo.',
    'prefix' => 'hien-trang-sat-lo',
], function () {
    // Hien trang sat lo bo song 2020
    Route::get('2020', 'LandslideLocationController@year2020')->name('hien-trang-sat-lo-2020');

    // Hien trang sat lo bo song 2020
    Route::get('2025', function () {
        return view('pages.hien-trang-sat-lo-2025');
    })->name('hien-trang-sat-lo-2025');
});

// Ban do nguy co sat lo
Route::get('ban-do-nguy-co-sat-lo', function () {
    return view('pages.ban-do-nguy-co-sat-lo');
})->name('ban-do-nguy-co-sat-lo');


// Route::get('files/{file}', function($file){
//     $exists = Storage::disk('s3');
//     dd($exists);
// });

// Route::get('files/{file}', function($file){
//     $filePath = Storage::disk('s3')->url($file);
//     // Storage::setVisibility($filePath, 'public');
//     // $filePath = Storage::disk('s3')->files('/');
//     $headers = [
//         'Content-Type' => 'application/pdf'
//     ];


//     return response($filePath);
//     // return redirect($filePath);
// });
