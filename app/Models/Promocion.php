<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'servicio',
        'descripcion',
        'asunto',
        'email',
        'imagen'
    ];
}
