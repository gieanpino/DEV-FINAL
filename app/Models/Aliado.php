<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aliado extends Model
{
    use HasFactory;

    protected $table = 'aliados';

    protected $fillable = [
        'nombre','nit','arl_pdf','dss_pdf','ficha_pdf','diploma_pdf','curso_pdf','salud_pdf','created_at','updated_at',
    ];
}
