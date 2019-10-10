<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function categorypost(){
        return $this->belongsTo(CategoryPost::class);
    }
}
