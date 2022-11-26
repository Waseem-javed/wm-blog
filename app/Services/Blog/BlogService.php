<?php 

declare(strict_types=1);

namespace App\Services\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use App\Services\Blog\BlogRepository;

class BlogService {

    const PAGE_LENGTH =10;
    public function __construct(private readonly BlogRepository $service){
        
    }

    public function getAllPosts(Request $request): array
    {
        $totalCount = $this->service->getTotalCount();
        $pageNumber = $this->getPageNumber($request,$totalCount);
        
        return [
            'title'=>'Blog',
            "page_length"=>self::PAGE_LENGTH,
            "total_blogs"=>$totalCount,
            "page_number"=>$pageNumber,
            "blogs"=>$this->service->getBlogPosts($pageNumber,self::PAGE_LENGTH),
            "trendings"=>$this->service->getBlogPosts($pageNumber,self::PAGE_LENGTH,['is_trending'=>1]),
            "recents"=>$this->service->getRecentPosts(),
                    'tags'=>[
                        [
                            'url'=>'/',
                            'name'=>'Laravel'
                        ],
                        [
                            'url'=>'/',
                            'name'=>'Cyber'
                        ],
                        [
                            'url'=>'/',
                            'name'=>'Development'
                        ]
                    ]
                        ];
    }

    private function getPageNumber(Request $request,int $totalCount):int
    {
        $maxNumberPages = ceil($totalCount / self::PAGE_LENGTH);
        $page = $request->query('page',1);

        try{
            $request->validate([
                'page'=>'numeric|min:1|max:$maxNumberPages'
            ],[
                'page'=>$page
            ]);
        }catch(ValidationException $error){
            abort(404);
        }
        return (int)$page;
    }

    

}

?>