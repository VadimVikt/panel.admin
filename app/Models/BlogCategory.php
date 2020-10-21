<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    public function blogPost()
    {
        return $this->hasMany(BlogPost::class);
    }

}
