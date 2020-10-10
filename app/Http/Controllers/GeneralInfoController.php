<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralInfoController extends Controller
{
    public function commonTarget(){
    	return view('pages.thong-tin-chung.muc-tieu-chung');
    }

    public function specificTarget(){
    	return view('pages.thong-tin-chung.muc-tieu-cu-the');
    }
}
