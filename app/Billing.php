<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    
    const CASA = 'Casa';
    const INTERIOR = 'Interior';
    const DEPARTAMENTO = 'Departamento';
    
    const ACTIVO = 1;
    const DESACTIVO = 0;
    public function city(){
        return $this->belongsTo(City::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
