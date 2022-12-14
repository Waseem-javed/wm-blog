<?php 

declare(strict_types=1);
namespace App\Http\Controllers\client;
use App\Http\Controllers\Controller;
use App\Services\Blog\BlogService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlogController extends Controller {

    public function __construct(public readonly BlogService $blogService){
        $this->middleware('auth');
    }

    public function blog(Request $request): View{
        
        return view('blog',$this->blogService->getAllPosts($request));
    }

}

?>