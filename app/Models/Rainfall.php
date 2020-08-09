<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rainfall extends Model
{
    protected $table = 'rainfall';

    public function station()
    {
        return $this->belongsTo('App\Models\Station');
    }
}
