<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artical extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;
    public function blogCategories()
    {
        return $this->belongsToMany(BlogCategory::class, 'articals_blog_categories','artical_id', 'category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
