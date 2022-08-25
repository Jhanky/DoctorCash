<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;


    protected $fillable =[

       'PRE_ID',
       'RES_RESPUESTA',
       'USE_ID',

    ];
}
