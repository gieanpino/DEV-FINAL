<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    protected $fillable = [
        'nombre','nit','direccion','act_economica','nivel_riesgo','n_trabajadores','naturaleza','telefonos','correo','tipo','created_at','updated_at',
    ];
}
