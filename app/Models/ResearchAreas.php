<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchAreas extends Model
{
    public $table = 'research_areas';

    public $timestamps = false;

    protected $fillable = ['natural_features', 'description'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
