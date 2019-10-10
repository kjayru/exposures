<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function billing(){
        return $this->belongsTo(Billing::class);
    }

    public function payment(){
        return $this->hasOne(Payment::class);
    }
}
