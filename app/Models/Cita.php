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
        'asunto',
        'descripcion',
        'fecha',
        'hora'
    ];
    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'id_servicio');
    }
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }
}
