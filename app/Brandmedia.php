<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brandmedia extends Model
{
    protected $table = 'brandmedias';

    public function brands(){
        return $this->belongsTo(Brand::class);
    }
}
