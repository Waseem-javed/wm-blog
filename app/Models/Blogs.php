<?php

namespace App\Models;
use App\Models\BlogTags;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'blogs';
    protected $fillable = [
        "id",
        "url",
        "is_trending",
        "author",
        "author_image_url",
        "image_url_portait",
        "image_url_landscape",
        "title",
        "description",
        "content",
        "date",
        "created_at",
        "updated_at",
    ];

    public function tags(){
        return $this->hasMany(BlogTags::class);
    }
}