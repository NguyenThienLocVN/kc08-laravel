<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stations;
use App\Models\MuddySandData;

class StationsController extends Controller
{
    // Danh sach tram thuy van
    public function hydrologicalStations(){
        $stations = Stations::all();
        return view('pages.du-lieu-de-tai.so-lieu-thuy-van.danh-sach-tram', ['stations' => $stations]);
    }

    // Danh sach tram bun cat
    public function muddySandStations(){
        $stations = Stations::all();
        return view('pages.du-lieu-de-tai.so-lieu-bun-cat.danh-sach-tram', ['stations' => $stations]);
    }

    // Du lieu bun cat
    public function getMuddySandData($id){
        $station = Stations::where('Station_ID', $id)->get();

        $muddySand = MuddySandData::where('Station_ID', $id)->get();
        return ['muddySand' => $muddySand, 'station' => $station];
    }
}
