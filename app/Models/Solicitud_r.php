<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitud_r extends Model
{
    protected $table = 'sol_reciclado';
    protected $fillable = ['cod_user', 'cod_produc', 'fecha_r', 'precio_fin', 'metodo_p', 'estado', 'courier'];
}