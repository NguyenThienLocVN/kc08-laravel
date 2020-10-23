<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function showImport(){
        return view('pages.import-file');
    }

    public function doImport(Request $request){
        
        // $this->validate($request, [
        //     'input-file' => "required",
        //     'data-import' => "required"
        // ]);
        $dataArray = [];
        $inputFileName = $request->get('input_file');
        Excel::load($inputFileName, function($excel) {
            $cell = $excel->getSheet(2)->getCellByColumnAndRow(10, 1);       
        });
        die(var_dump($cell));

        // return view('pages.import-file');
    }
}
