<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pregunta extends Model
{
    use HasFactory;

    protected $fillable =[

        'PRE_DESCRICCION',
        'CAT_ID',

    ];
}
