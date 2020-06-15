<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function dealer(){
        return $this->belongsToMany(Dealer::class);
    }

    public function brandmedia(){
        return $this->hasMany(Brandmedia::class);
    }

    public function marcas(){
        return $this->hasMany(Marca::class);
    }

}
