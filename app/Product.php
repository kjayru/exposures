<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsToMany(Category::class);
    }

    public function multimedias(){
        return $this->belongsToMany(Multimedia::class);
    }

    public function activity(){
        return $this->belongsTo(Activity::class);
    }
}
