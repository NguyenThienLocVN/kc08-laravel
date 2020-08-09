<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $table = 'station';

    protected $fillable = [
        'Station_Name',
        'Station_Type',
        'Data_Freq',
        'Latitude',
        'Longitude',
        'Elevation',
        'HUC',
        'Branch_ID',
        'River_Mile',
        'Reach_ID',
        'Dr_Area',
        'Agency',
        'Ref_ID',
        'Remarks',
        'Other',
        'WaterBodyType',
        'Basin_Name',
        'State',
        'County_Name',
        'FIPS_Code',
        'EcoRegion',
        'PlanRegion',
        'Convert_Station_ID',
        'Create_Update'
    ];

    public function rainfalls()
    {
        return $this->hasMany('App\Models\Rainfall', 'Station_ID');
    }
}
