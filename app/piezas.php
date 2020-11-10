<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class piezas extends Model
{
    protected $table = "piezas";
    protected $fillable =  ['nombre', 'descripcion', 'numeroPiezas', 'costoPieza'];
}
