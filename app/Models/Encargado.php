<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Encargado extends Model
{

    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'Id','Nonbre','cedula','Nivel','empresa','hv','diploma','certificadoCusro','certificadoSeccional',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
