<?php

namespace Fortics;

use Illuminate\Database\Eloquent\Model;

class Refrigerant extends Model
{
    protected $fillable = [
        'brand' , 'type' , 'flavor', 'litrage', 'value', 'stoke'
    ];
}
