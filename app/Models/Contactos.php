<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    protected $table = 'contacto';
    protected $fillable = ['cod_user', 'mensaje', 'estado'];
}
