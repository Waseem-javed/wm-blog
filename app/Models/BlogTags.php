<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTags extends Model
{
    protected $table = 'blog_tags';
    protected $fillable = [
        "id",
        "blogs_id",
        'tags',
        "created_at",
        "updated_at"
    ];
}