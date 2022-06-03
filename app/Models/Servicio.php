<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'tipo_servicio',

    ];
    public function cita()
    {
        return $this->hasOne(Cita::class, 'id');
    }

    public function promocion()
    {
        return $this->hasOne(Promociones::class, 'servicio');
    }
}
