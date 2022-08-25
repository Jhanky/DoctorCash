<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'USE_NOMBRE',
        'USE_FECHA_NACIMIENTO',
        'USE_ESTADO_CIVIL',
        'USE_TIPO_DOCUMENTO',
        'USE_NUMERO_IDENTIFICACCION',
        'USE_TIPO_CONTRATO',
        'USE_ANTIGUAEDAD_CONTRATO',
        'USE_DEPARTAMENTO',
        'USE_MUNICIPIO',
        'USE_NUMERO_PERSONAS_CARGO',
        'USE_OBJETIVO_FINANCIERO',
        'USE_INGRESOS_ALGUIEN_MAS',
        'USE_EMAIL',
        'USE_PASSWORD',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'USE_PASSWORD',
        'USE_REMEMBER_TOKEN',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'USE_EMAIL_VERIFIED_AT' => 'datetime',
    ];

}
