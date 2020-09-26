<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandslideLocations;
use App\Models\LineCoordinate;
use App\Models\LandslideImages;

class LandslideLocationsController extends Controller
{
    public function year2020(){    

        $images = LandslideImages::all();
        
        // Markers
        $normalLevel = LandslideLocations::where('level', 1)->where('year', 2020)->get();
        foreach($normalLevel as $n)
        {   
            foreach($images as $im)
            {
                if($n->location_id == $im->location_id)
                {
                    $n['image'] = $im->link;
                }
            }
        }
        
        $dangerLevel = LandslideLocations::where('level', 2)->where('year', 2020)->get();
        foreach($dangerLevel as $n)
        {   
            foreach($images as $im)
            {
                if($n->location_id == $im->location_id)
                {
                    $n['image'] = $im->link;
                }
            }
        }

        $veryDangerLevel = LandslideLocations::where('level', 3)->where('year', 2020)->get();
        foreach($veryDangerLevel as $n)
        {   
            foreach($images as $im)
            {
                if($n->location_id == $im->location_id)
                {
                    $n['image'] = $im->link;
                }
            }
        }

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
                        'detailContent' => "<div class='landslide-popup container'><ul class='nav nav-tabs'><li class='active'><a data-toggle='tab' href='#thong-tin-sat-lo'>Thông tin sạt lở</a></li><li class='".$this->checkImageExist($n->image)."'><a data-toggle='tab' href='#hinh-anh'>Hình ảnh</a></li> </ul><div class='popup-content tab-content'><div id='thong-tin-sat-lo' class='tab-pane fade in active show'><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Mức độ:</p><p class='p-0 my-2'>$n->level_name</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Tên:</p><p class='p-0 my-2'>$n->title</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Vị trí:</p><p class='p-0 my-2'>$n->commune, $n->district, $n->province</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Ghi chú:</p><p class='p-0 my-2'>$n->name</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Chiều dài (m):</p><p class='p-0 my-2'>$n->length</p></div></div><div id='hinh-anh' class='tab-pane fade'><img class='w-100 d-block' style='height:200px;' alt='hinh-anh-sat-lo' src='$n->image' /></div></div>"
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
                        'detailContent' => "<div class='landslide-popup container'><ul class='nav nav-tabs'><li class='active'><a data-toggle='tab' href='#thong-tin-sat-lo'>Thông tin sạt lở</a></li><li class='".$this->checkImageExist($n->image)."'><a data-toggle='tab' href='#hinh-anh'>Hình ảnh</a></li> </ul><div class='popup-content tab-content'><div id='thong-tin-sat-lo' class='tab-pane fade in active show'><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Mức độ:</p><p class='p-0 my-2'>$n->level_name</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Tên:</p><p class='p-0 my-2'>$n->title</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Vị trí:</p><p class='p-0 my-2'>$n->commune, $n->district, $n->province</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Ghi chú:</p><p class='p-0 my-2'>$n->name</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Chiều dài (m):</p><p class='p-0 my-2'>$n->length</p></div></div><div id='hinh-anh' class='tab-pane fade'><img class='w-100 d-block' style='height:200px;' alt='hinh-anh-sat-lo' src='$n->image' /></div></div>"
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
                        'detailContent' => "<div class='landslide-popup container'><ul class='nav nav-tabs'><li class='active'><a data-toggle='tab' href='#thong-tin-sat-lo'>Thông tin sạt lở</a></li><li class='".$this->checkImageExist($n->image)."'><a data-toggle='tab' href='#hinh-anh'>Hình ảnh</a></li> </ul><div class='popup-content tab-content'><div id='thong-tin-sat-lo' class='tab-pane fade in active show'><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Mức độ:</p><p class='p-0 my-2'>$n->level_name</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Tên:</p><p class='p-0 my-2'>$n->title</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Vị trí:</p><p class='p-0 my-2'>$n->commune, $n->district, $n->province</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Ghi chú:</p><p class='p-0 my-2'>$n->name</p></div><div class='d-flex'><p class='col-4 p-0 my-2 font-weight-bold'>Chiều dài (m):</p><p class='p-0 my-2'>$n->length</p></div></div><div id='hinh-anh' class='tab-pane fade'><img class='w-100 d-block' style='height:200px;' alt='hinh-anh-sat-lo' src='$n->image' /></div></div>"
                    ],
                    'id' => $n->gid
                ]);
        }
        $veryDangerJson = json_encode($veryDangerArray, JSON_UNESCAPED_UNICODE);


        // Load all landslide location
        $landSlideLocations = LandslideLocations::where('year', 2020)->get();

        return view('pages.hien-trang-sat-lo-2020', ['normalJson' => $normalJson, 'dangerJson' => $dangerJson, 'veryDangerJson' => $veryDangerJson, 'landSlideLocations' => $landSlideLocations ]);
    }

    function checkImageExist($image)
    {
        if($image == '')
        {
            return 'd-none';
        }
        return 'd-block';
    }
}
