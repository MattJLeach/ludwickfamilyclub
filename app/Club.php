<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'long_name',
        'description',
        'image',
        'contact',
        'phone',
        'email',
        'website',
        'facebook',
        'twitter',
        'google',
        'sessions'
    ];
}
