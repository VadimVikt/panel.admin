<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use SoftDeletes;

    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
