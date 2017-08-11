<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    protected $table = 'courier_turno';
    protected $fillable = ['dia', 'hora', 'dispo'];
}
