<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function showImport(){
        return view('pages.import-file');
    }
}
