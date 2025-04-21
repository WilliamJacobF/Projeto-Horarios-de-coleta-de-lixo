<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    protected $fillable = [
        'nomeRua',
        'horario',
    ];
}
