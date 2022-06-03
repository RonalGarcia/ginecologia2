<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promociones extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'servicio',
        'paciente',
        'descripcion',
        'asunto',
        'email',
        'imagen'
    ];

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'servicio');
    }
}
