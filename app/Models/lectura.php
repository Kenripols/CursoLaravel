<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lectura extends Model
{
    use HasFactory;

    public function mascotas(){

    return $this->hasOne(Mascota::class);
    
}
}
