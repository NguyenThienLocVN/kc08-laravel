<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResearchAreas;

class ResearchAreasController extends Controller
{
    public function index(ResearchAreas $slug){
        return view('pages.khu-vuc-nghien-cuu.index', ['feature' => $slug]);
    }

    public function showEdit(ResearchAreas $slug){
        return view('pages.khu-vuc-nghien-cuu.edit', ['feature' => $slug]);
    }

    public function doEdit(Request $request, ResearchAreas $slug){
        $slug->fill([
            'id' => $slug->id,
            'natural_features' => $request->input_natural_features,
            'description' => $request->input_description
        ]);

        $slug->save();
        
        return redirect(url('/khu-vuc-nghien-cuu/'.$slug->slug))->with('message', 'Cập nhật thành công');
    }
}
