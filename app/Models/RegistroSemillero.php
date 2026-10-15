<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroSemillero extends Model
{
    use HasFactory;

    protected $fillable = [
        'semillero',
        'linea_investigacion',
    ];
}