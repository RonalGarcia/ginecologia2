<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultas extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_paciente',
        'fecha',
        'amenorrea',
        'nauseas',
        'cefalea',
        'edena',
        'movimientosfetales',
        'pesocorporal',
        'tensionarterial',
        'alturauterina',
        'latfetal',
        'situacion',

    ];
    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }
}
