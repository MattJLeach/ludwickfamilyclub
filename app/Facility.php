<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [
        'name', 
        'description', 
        'image1', 
        'image2'
    ];
}
