<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandslideLocation;
use App\Models\LineCoordinate;

class LandslideLocationController extends Controller
{
    public function year2020(){
        // Lines
        $normalLine = LineCoordinate::where('level', 1)->where('year', 2020)->pluck('coordinate');
        $dangerLine = LineCoordinate::where('level', 2)->where('year', 2020)->pluck('coordinate');
        $veryDangerLine = LineCoordinate::where('level', 3)->where('year', 2020)->pluck('coordinate');

        // Normal
        $normalLineArray = [];
        foreach($normalLine as $line)
        {
            array_push($normalLineArray, [
                'type' => 'LineString',
                'coordinates' => json_decode($line)
            ]);
        } 
        $normalLineJson = json_encode($normalLineArray, JSON_UNESCAPED_UNICODE);
        
        // Danger
        $dangerLineArray = [];
        foreach($dangerLine as $line)
        {
            array_push($dangerLineArray, [
                'type' => 'LineString',
                'coordinates' => json_decode($line)
            ]);
        } 
        $dangerLineJson = json_encode($dangerLineArray, JSON_UNESCAPED_UNICODE);

        // Very danger
        $veryDangerLineArray = [];
        foreach($veryDangerLine as $line)
        {
            array_push($veryDangerLineArray, [
                'type' => 'LineString',
                'coordinates' => json_decode($line)
            ]);
        } 
        $veryDangerLineJson = json_encode($veryDangerLineArray, JSON_UNESCAPED_UNICODE);
        

        // Markers
        $normalLevel = LandslideLocation::where('level_num', 1)->where('year', 2020)->get();
        $dangerLevel = LandslideLocation::where('level_num', 2)->where('year', 2020)->get();
        $veryDangerLevel = LandslideLocation::where('level_num', 3)->where('year', 2020)->get();

        // Normal level
        $normalArray = ['type' => 'FeatureCollection',
                        'features' =>[]
                        ];
                        $name = '';
        foreach($normalLevel as $n){
            array_push($normalArray['features'], 
                [
                    'geometry' => [
                        'type' => 'Point',
                        'coordinates' => [$n->longitude, $n->latitude]
                    ],
                    'type' => 'Feature',
                    'properties' => [
                        'hoverContent' => "<b>$n->title</b>",
                        'detailContent' => "<div class='landslide-popup'><ul class='title'><li class='font-weight-bold' style='color: #0D47A1;'>Thông tin sạt lở</li></ul><div class='popup-content'><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Mức độ:</p><p class='p-0 my-2'>$n->level_name</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Tên:</p><p class='p-0 my-2'>$n->name</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Vị trí:</p><p class='p-0 my-2'>$n->commune, $n->district, $n->province</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Ghi chú:</p><p class='p-0 my-2'>$n->note</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Chiều dài (m):</p><p class='p-0 my-2'>$n->length</p></div></div></div>"
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
                        'hoverContent' => "<b>$n->title</b>",
                        'detailContent' => "<div class='landslide-popup'><ul class='title'><li class='font-weight-bold' style='color: #0D47A1;'>Thông tin sạt lở</li></ul><div class='popup-content'><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Mức độ:</p><p class='p-0 my-2'>$n->level_name</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Tên:</p><p class='p-0 my-2'>$n->name</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Vị trí:</p><p class='p-0 my-2'>$n->commune, $n->district, $n->province</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Ghi chú:</p><p class='p-0 my-2'>$n->note</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Chiều dài (m):</p><p class='p-0 my-2'>$n->length</p></div></div></div>"
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
                        'hoverContent' => "<b>$n->title</b>",
                        'detailContent' => "<div class='landslide-popup'><ul class='title'><li class='font-weight-bold' style='color: #0D47A1;'>Thông tin sạt lở</li></ul><div class='popup-content'><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Mức độ:</p><p class='p-0 my-2'>$n->level_name</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Tên:</p><p class='p-0 my-2'>$n->name</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Vị trí:</p><p class='p-0 my-2'>$n->commune, $n->district, $n->province</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Ghi chú:</p><p class='p-0 my-2'>$n->note</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Chiều dài (m):</p><p class='p-0 my-2'>$n->length</p></div></div></div>"
                    ],
                    'id' => $n->gid
                ]);
        }
        $veryDangerJson = json_encode($veryDangerArray, JSON_UNESCAPED_UNICODE);


        // Load all landslide location
        $landSlideLocations = LandslideLocation::where('year', 2020)->get();

        return view('pages.hien-trang-sat-lo-2020', ['normalJson' => $normalJson, 'dangerJson' => $dangerJson, 'veryDangerJson' => $veryDangerJson, 'normalLineJson' => $normalLineJson, 'dangerLineJson' => $dangerLineJson, 'veryDangerLineJson' => $veryDangerLineJson, 'landSlideLocations' => $landSlideLocations ]);
    }
}
