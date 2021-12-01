<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'encargados_sgsst';

    protected $fillable = [
        'FOR17','created_at','updated_at',
    ];
}
