<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medpart extends Model
{
    protected $fillable = [
        'name', 'logo', 'width', 'height'
    ];
}
