<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'edad',
        'nombreesposo',
        'pesoanterior',
        'talla',
        'gestas',
        'paridad',
        'abortos',
        'cesarias',
        'fur',
        'fpp',
        'fuma',
        'numcigarros',
        'alcoholismo',
        'vih',
        'vorl',
        'hb',
        'glicemia',
        'ego',
        'diabetes',
        'tbpulmonar',
        'otros',
        'lueticas',
        'grupo',
        'rh',
        'grupo2',
        'rh2',
        'sensibilizacion',
        'anttrans',
        'pesoanterior2',
        'cardiopatias',
        'hipertension',
        'diabetes2',
        'infprimaria',
        'tbpulmonar2',
        'intquir',
        'patpsi',
        'rubeola',
        'convulciones',
        'otrosdos',

    ];
}
