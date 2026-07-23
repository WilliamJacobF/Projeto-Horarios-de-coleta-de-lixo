<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class horario extends Model
{
    protected $fillable = [
        'nomeRua',
        'primeiro dia',
        'primeiro horario',
        'segundo dia',
        'segundo horario',
        'terceiro dia',
        'terceiro horario'
    ];
    use HasFactory;
}