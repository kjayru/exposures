<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function slide(){
        return $this->belongsTo(Slide::class);
    }

    public function video(){
        return $this->belongsTo(Video::class);
    }
}
