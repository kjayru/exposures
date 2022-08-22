<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideItem extends Model
{
    protected $table ='slide_items';

    public function slide()
    {
        return $this->belongsTo(Slide::class);
    }

    public function multimedias()
    {
        return $this->belongsToMany(Multimedia::class);
    }
}
