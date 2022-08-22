<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    public function state(){
        return $this->belongsTo(State::class);
    }

    public function brand(){
        return $this->belongsToMany(Brand::class);
    }
}
