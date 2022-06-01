<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    //use HasFactory;
    protected $fillable = [
        'id',
        'id_paciente',
        'id_servicio',
        'descripcion',
        'fecha',
        'hora'
    ];
}
