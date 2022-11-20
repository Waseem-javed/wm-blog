<?php 

declare(strict_types=1);
namespace App\Http\Controllers;
use App\Services\Blog\BlogService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlogController extends Controller {

    public function __construct(public readonly BlogService $blogService){

    }

    public function blog(Request $request): View{
        return view('blog',$this->blogService->getAllPosts($request));
    }

}

?>