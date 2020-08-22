<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandslideLocation;

class LandslideLocationController extends Controller
{
    public function year2020(){
        $normalLevel = LandslideLocation::where('level', 1)->get();
        $dangerLevel = LandslideLocation::where('level', 2)->get();
        $veryDangerLevel = LandslideLocation::where('level', 3)->get();

        // Normal level
        $normalArray = ['type' => 'FeatureCollection',
                        'features' =>[]
                        ];
        foreach($normalLevel as $n){
            array_push($normalArray['features'], 
                [
                    'geometry' => [
                        'type' => 'Point',
                        'coordinates' => [$n->longitude, $n->latitude]
                    ],
                    'type' => 'Feature',
                    'properties' => [
                        'popupContent' => $n->name
                    ],
                    'id' => $n->gid
                ]);
        }
        $normalJson = json_encode($normalArray, JSON_UNESCAPED_UNICODE);

        // Danger level
        $dangerArray = ['type' => 'FeatureCollection',
                        'features' =>[]
                        ];

        foreach($dangerLevel as $n){
            array_push($dangerArray['features'], 
                [
                    'geometry' => [
                        'type' => 'Point',
                        'coordinates' => [$n->longitude, $n->latitude]
                    ],
                    'type' => 'Feature',
                    'properties' => [
                        'popupContent' => $n->name
                    ],
                    'id' => $n->gid
                ]);
        }
        $dangerJson = json_encode($dangerArray, JSON_UNESCAPED_UNICODE);

        // Very danger level
        $veryDangerArray = ['type' => 'FeatureCollection',
                        'features' =>[]
                        ];

        foreach($veryDangerLevel as $n){
            array_push($veryDangerArray['features'], 
                [
                    'geometry' => [
                        'type' => 'Point',
                        'coordinates' => [$n->longitude, $n->latitude]
                    ],
                    'type' => 'Feature',
                    'properties' => [
                        'popupContent' => $n->name
                    ],
                    'id' => $n->gid
                ]);
        }
        $veryDangerJson = json_encode($veryDangerArray, JSON_UNESCAPED_UNICODE);

        return view('pages.hien-trang-sat-lo-2020', ['normalJson' => $normalJson, 'dangerJson' => $dangerJson, 'veryDangerJson' => $veryDangerJson ]);
    }
}
