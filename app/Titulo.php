<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    protected $table='titulos';
    protected $fileable=[
        'nombre','año','institucion','tipo'
    ];
}