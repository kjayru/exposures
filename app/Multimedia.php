<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
   protected $table = "multimedias";

   public function slideitems()
   {
       return $this->belongsToMany(SlideItem::class);
   }

   public function products(){
    return $this->belongsToMany(Product::class);
    }
}
