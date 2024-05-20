<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camionero extends Model
{
    public function camiones()
    {
        return $this->belongsToMany('App\Model\Camion');
    }

    public function paquetes()
    {
        return $this->hasMany(Paquete::class);
    }
}
