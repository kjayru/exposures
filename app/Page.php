<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Page extends Model
{

    protected $guarded = [];

    public function slide(){
        return $this->belongsTo(Slide::class);
    }

    public function video(){
        return $this->belongsTo(Video::class);
    }

    public function blocks(){
        return $this->hasMany(Block::class);
    }
}
