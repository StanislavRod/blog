<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function scopeIsPublish($query)
    {
        return $query->where('is_publish', 1);
    }
}
