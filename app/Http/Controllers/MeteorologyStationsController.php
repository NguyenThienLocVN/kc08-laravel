<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MeteorologyStations;
use App\Models\MeteorologyData;

class MeteorologyStationsController extends Controller
{
    public function showStations(){
        $meteorologyStations = MeteorologyStations::all();
        return view('pages.du-lieu-de-tai.so-lieu-khi-tuong', ['meteorologyStations' => $meteorologyStations]);
    }

    public function getRainData($id){
        $station = MeteorologyStations::where('Station_ID', $id)->get();

        $meteorologyData = MeteorologyData::where('Station_ID', $id)->get();
        return ['meteorologyData' => $meteorologyData, 'station' => $station];
    }
}
