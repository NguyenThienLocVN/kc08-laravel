<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MeteorologyStations;

class MeteorologyStationsController extends Controller
{
    public function showStations(){
        $meteorologyStations = MeteorologyStations::all();
        return view('pages.du-lieu-de-tai.so-lieu-khi-tuong', ['meteorologyStations' => $meteorologyStations]);
    }
}
