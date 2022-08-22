<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function tags(){
        return $this->BelongsToMany(Tag::class);
    }
}
