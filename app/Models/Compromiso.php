<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compromiso extends Model
{
    use HasFactory;

    protected $table = 'compromisos';

    protected $fillable = [
        'FOR02','FOR03','created_at','updated_at',
    ];
}
