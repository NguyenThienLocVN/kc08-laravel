<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use App\Models\Rainfall;

class StationController extends Controller
{
    public function index(){
        $stations = Station::all();
        return view('pages.du-lieu-de-tai.danh-sach-tram', ['stations' => $stations]);
    }

    public function getRain($id){
       
        $filterRain = Rainfall::whereBetween('Date_Time', ['1961-01-01', '1961-12-31'])->get();
        // die(var_dump($filterRain));
        $station = Station::where('Station_ID', $id)->get();

        $rainFall = Rainfall::where('Station_ID', $id)->get();
        // dd($rainFall['Date_Time']);
        
        
        return ['rainFall' => $rainFall, 'station' => $station, 'filterRain'=>$filterRain];
    }
}
