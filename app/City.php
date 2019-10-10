<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function state(){
        return $this->belongsTo(State::class);
    }

    public function billings(){
        return $this->hasMany(Billing::class);
    }
}
