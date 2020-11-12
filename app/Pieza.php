<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pieza extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'cantidad', 'costo' 
    ];
}
