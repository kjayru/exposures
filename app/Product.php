<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function multimedias(){
        return $this->belongsToMany(Multimedia::class);
    }
}
