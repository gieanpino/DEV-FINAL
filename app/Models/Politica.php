<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Politica extends Model
{
    use HasFactory;

    protected $table = 'politicas';

    protected $fillable = [
        'nombre','nit','compromiso','requisitos','objetivos','doc_sistema','firma_pdf','fecha','created_at','updated_at',
    ];
}
