<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EncargadoSGSST extends Model
{
    use HasFactory;

    protected $table = 'encargados_sgsst';

    protected $fillable = [
        'nombre','apellido','cedula','nivel_estudio','hoja_vida','diploma_pdf','curso_pdf','salud_pdf','created_at','updated_at',
    ];

}
