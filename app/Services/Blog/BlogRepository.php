<?php

declare(strict_types=1);

namespace App\Services\Blog;
use App\Models\Blogs;

class BlogRepository{
    
    const RECENT_POST_LIMIT =5;
    public function getTotalCount(): int{
        return Blogs::all()->count();
    }
    
    public function getBlogPosts(int $page, int $pageLength, array $filters = []):array{
        if($filters !== []){
            return Blogs::with(['tags'])
            ->where($filters)
            ->where('id','>',0)
            ->limit($pageLength)
            ->offset(($page - 1)*$pageLength)
            ->get()->toArray();
        }
        return Blogs::with(['tags'])
        ->where('id','>',0)
        ->limit($pageLength)
        ->offset(($page - 1)*$pageLength)
        ->get()->toArray();
    }

    public function getRecentPosts():array{
        return Blogs::with(['tags'])
        ->where('id','>',0)
        ->limit(self::RECENT_POST_LIMIT)
        ->orderBy('created_at','desc')
        ->get()->toArray();
    }
}