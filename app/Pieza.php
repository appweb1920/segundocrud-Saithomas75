<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pieza extends Model
{

    use SoftDeletes;
    
    protected $fillable = [
        'nombre', 'descripcion', 'cantidad', 'costo' 
    ];
}
