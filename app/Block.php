<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $table = 'blocks';
    public function page(){
        return $this->belongsTo(Page::class);
    }
}
