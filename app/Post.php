<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function categoryblog(){
        return $this->belongsTo(CategoryBlog::class,'category_blog_id');
    }
}
