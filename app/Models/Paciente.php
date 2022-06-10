<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        'edad',
        'email',
        'telefono',
    ];
    public function paciente()
    {
        return $this->hasMany(Consultas::class, 'id_paciente');
    }
}
