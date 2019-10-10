<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public function pages(){
        return $this->hasMany(Page::class);
    }
}
