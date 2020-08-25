<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchemeProduct extends Model
{
    public $table = 'scheme_products';

    protected $fillable = ['Scheme_Name', 'Scheme_Description'];
}
