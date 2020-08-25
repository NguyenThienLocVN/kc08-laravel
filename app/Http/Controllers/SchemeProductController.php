<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchemeProduct;

class SchemeProductController extends Controller
{
    public function showAll(){
        $schemeProducts = SchemeProduct::all();
        return view('pages.thong-tin-chung.san-pham-de-tai', ['schemeProducts' => $schemeProducts]);
    }
    
    public function getDetail($Scheme_ID){
        $schemeProduct = SchemeProduct::where('Scheme_ID', $Scheme_ID)->first();
        return view('pages.thong-tin-chung.chi-tiet-san-pham-de-tai', ['schemeProduct' => $schemeProduct]);
    }
}
