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
    Route::get('muc-tieu-chung', 'GeneralInfoController@commonTarget')->name('thong-tin-chung.muc-tieu-chung');
    Route::get('muc-tieu-cu-the', 'GeneralInfoController@specificTarget')->name('thong-tin-chung.muc-tieu-cu-the');

    // San pham de tai
    Route::get('san-pham-de-tai', 'SchemeProductController@showAll' )->name('thong-tin-chung.san-pham-de-tai');
    Route::get('san-pham-1', function () {
        return view('pages.thong-tin-chung.san-pham-1');
    })->name('thong-tin-chung.san-pham-1');

    Route::get('san-pham-2', function () {
        return view('pages.thong-tin-chung.san-pham-2');
    })->name('thong-tin-chung.san-pham-2');

    Route::get('san-pham-3', function () {
        return view('pages.thong-tin-chung.san-pham-3');
    })->name('thong-tin-chung.san-pham-3');

    Route::get('san-pham-4', function () {
        return view('pages.thong-tin-chung.san-pham-4');
    })->name('thong-tin-chung.san-pham-4');

    Route::get('san-pham-5', function () {
        return view('pages.thong-tin-chung.san-pham-5');
    })->name('thong-tin-chung.san-pham-5');

    Route::get('san-pham-6', function () {
        return view('pages.thong-tin-chung.san-pham-6');
    })->name('thong-tin-chung.san-pham-6');

    // Chi tiet san pham de tai
    Route::get('san-pham-de-tai/{Scheme_ID}', 'SchemeProductController@getDetail')->name('thong-tin-chung.chi-tiet-san-pham-de-tai');
    // Sua ten san pham de tai
    Route::get('san-pham-de-tai/{Scheme_ID}/edit', 'SchemeProductController@showEdit')->name('thong-tin-chung.sua-san-pham-de-tai');
    Route::post('san-pham-de-tai/{Scheme_ID}/edit', 'SchemeProductController@doEdit');

    // Dong gop moi cua de tai
    Route::get('dong-gop-moi-de-tai', function () {
        return view('pages.thong-tin-chung.dong-gop-moi-de-tai');
    })->name('thong-tin-chung.dong-gop-moi-de-tai');

    // Hieu qua
    Route::get('hieu-qua', function () {
        return view('pages.thong-tin-chung.hieu-qua-de-tai');
    })->name('thong-tin-chung.hieu-qua-de-tai');

    // Cach tiep can
    Route::get('cach-tiep-can', function () {
        return view('pages.thong-tin-chung.cach-tiep-can');
    })->name('thong-tin-chung.cach-tiep-can');

    // Bai bao
    Route::get('bai-bao', function () {
        return view('pages.thong-tin-chung.bai-bao');
    })->name('thong-tin-chung.bai-bao');

// Bai bao tong hop
Route::get('bao-cao-tong-hop', function () {
    return view('pages.thong-tin-chung.bao-cao-tong-hop');
})->name('thong-tin-chung.bao-cao-tong-hop');

// Bai bao tom tat
Route::get('bao-cao-tom-tat', function () {
    return view('pages.thong-tin-chung.bao-cao-tom-tat');
})->name('thong-tin-chung.bao-cao-tom-tat');

// Bai 01
Route::get('bai-01', function () {
    return view('pages.thong-tin-chung.Bai-01');
})->name('thong-tin-chung.Bai_01');

// Bai 02
Route::get('bai-02', function () {
    return view('pages.thong-tin-chung.Bai-02');
})->name('thong-tin-chung.Bai_02');

// Bai 03
Route::get('bai-03', function () {
    return view('pages.thong-tin-chung.Bai-03');
})->name('thong-tin-chung.Bai_03');

// Bai 04
Route::get('bai-04', function () {
    return view('pages.thong-tin-chung.Bai-04');
})->name('thong-tin-chung.Bai_04');

// Bai 05
Route::get('bai-05', function () {
    return view('pages.thong-tin-chung.Bai-05');
})->name('thong-tin-chung.Bai_05');

// Bai 06
Route::get('bai-06', function () {
    return view('pages.thong-tin-chung.Bai-06');
})->name('thong-tin-chung.Bai_06');

});

// Khu vuc nghien cuu
Route::group([
    'name' => 'khu-vuc-nghien-cuu.',
    'prefix' => 'khu-vuc-nghien-cuu',
], function () {
    // Hien thi
    Route::get('{slug}', 'ResearchAreasController@index');

    // Chinh sua
    Route::get('{slug}/edit', 'ResearchAreasController@showEdit');
    Route::post('{slug}/edit', 'ResearchAreasController@doEdit');
});


// Du lieu de tai
Route::group([
    'name' => 'du-lieu-de-tai.',
    'prefix' => 'du-lieu-de-tai',
], function () {
    //So lieu khi tuong
    Route::get('so-lieu-khi-tuong', 'MeteorologyStationsController@showStations')->name('du-lieu-de-tai.so-lieu-khi-tuong');
    Route::get('so-lieu-khi-tuong/{id}','MeteorologyStationsController@getRainData');

    //So lieu bun cat
    Route::get('so-lieu-bun-cat', 'StationsController@muddySandStations')->name('du-lieu-de-tai.so-lieu-bun-cat');
    Route::get('so-lieu-bun-cat/{id}','StationsController@getMuddySandData');

    // So lieu thuy van
    Route::get('so-lieu-thuy-van', 'StationsController@hydrologicalStations')->name('du-lieu-de-tai.so-lieu-thuy-van');
    Route::get('so-lieu-thuy-van/{id}','StationsController@getHydrologicalData');

    Route::get('so-lieu-quan-trac', function () {
        return view('pages.du-lieu-de-tai.so-lieu-quan-trac');
    })->name('du-lieu-de-tai.so-lieu-quan-trac');
});

Route::group([
    'name' => 'hien-trang-sat-lo.',
    'prefix' => 'hien-trang-sat-lo',
], function () {
    // Hien trang sat lo bo song 2020
    Route::get('2020', 'LandslideLocationsController@year2020')->name('hien-trang-sat-lo-2020');

    // Hien trang sat lo bo song 2020
    Route::get('2025', function () {
        return view('pages.hien-trang-sat-lo-2025');
    })->name('hien-trang-sat-lo-2025');
});

// Ban do nguy co sat lo
Route::get('ban-do-nguy-co-sat-lo', function () {
    return view('pages.ban-do-nguy-co-sat-lo');
})->name('ban-do-nguy-co-sat-lo');

// SỔ TAY HƯỚNG DẪN QUẢN LÝ BỜ SÔNG
Route::get('so-tay-huong-dan', function () {
    return view('pages.so-tay-huong-dan-phan-1');
})->name('so-tay-huong-dan-phan-1');

Route::get('so-tay-huong-dan-phan-2', function () {
    return view('pages.so-tay-huong-dan-phan-2');
})->name('so-tay-huong-dan-phan-2');

Route::get('so-tay-huong-dan-phan-3', function () {
    return view('pages.so-tay-huong-dan-phan-3');
})->name('so-tay-huong-dan-phan-3');

Route::get('so-tay-huong-dan-phan-4', function () {
    return view('pages.so-tay-huong-dan-phan-4');
})->name('so-tay-huong-dan-phan-4');

Route::get('so-tay-huong-dan-phan-5', function () {
    return view('pages.so-tay-huong-dan-phan-5');
})->name('so-tay-huong-dan-phan-5');

// Ban do nguy co sat lo
Route::get('import-file', 'ImportController@showImport')->name('import-file');
Route::post('import-file', 'ImportController@doImport')->name('do-import-file');