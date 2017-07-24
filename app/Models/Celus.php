<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Celus extends Model
{
    protected $table = 'producto';
    protected $fillable = ['nombre', 'cod_produc', 'memoria', 'foto', 'precio_ini', 'marca'];
}
