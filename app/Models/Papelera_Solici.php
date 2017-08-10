<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Papelera_Solici extends Model
{
    protected $table = 'papelera_solicitudes';
    protected $fillable = ['cod_user', 'act', 'cod_produc', 'fecha_r', 'precio_fin', 'metodo_p', 'estado', 'courier'];
}
