<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stations;
use App\Models\MuddySandData;
use App\Models\HydrologicalData;

class StationsController extends Controller
{
    // Danh sach tram thuy van
    public function hydrologicalStations(){
        $stations = Stations::all();
        return view('pages.du-lieu-de-tai.so-lieu-thuy-van', ['stations' => $stations]);
    }

    // Du lieu thuy van
    public function getHydrologicalData($id){
        $station = Stations::where('Station_ID', $id)->get();

        $hydrological = HydrologicalData::where('Station_ID', $id)->get();
        return ['hydrological' => $hydrological, 'station' => $station];
    }

    // Danh sach tram bun cat
    public function muddySandStations(){
        $stations = Stations::all();
        return view('pages.du-lieu-de-tai.so-lieu-bun-cat', ['stations' => $stations]);
    }

    // Du lieu bun cat
    public function getMuddySandData($id){
        $station = Stations::where('Station_ID', $id)->get();

        $muddySand = MuddySandData::where('Station_ID', $id)->get();
        return ['muddySand' => $muddySand, 'station' => $station];
    }
}
