<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;
    public function articals()
    {
        return $this->belongsToMany(Artical::class, 'articals_blog_categories','category_id', 'artical_id');
    }
}
