<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mascota extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto', 'nombre', 'tipo', 'fechaNac', 'idRaza', 'idTitular'
    ];
}
