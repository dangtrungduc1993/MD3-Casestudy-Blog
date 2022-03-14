<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Repositories\BlogRepository;
use App\Repositories\CategoryRepository;
use App\Services\BlogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public $blogRepository;
    public $categoryRepository;

    public function __construct(BlogRepository $blogRepository, BlogService $blogService, CategoryRepository $categoryRepository)
    {
        $this->blogRepository = $blogRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $blogs = $this->blogRepository->getAll();
        return view('backend.blog.list', compact('blogs'));
    }

    public function indexAuth()
    {
        $blogs = $this->blogRepository->getAll();
        return view('backend.blog.listAuth', compact('blogs'));
    }

    public function create()
    {
        $categories = $this->categoryRepository->getAll();
        return view('backend.blog.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $this->blogRepository->store($request);
        return redirect()->route('blog.indexAuth');
    }

    public function show($id)
    {
        $blog = $this->blogRepository->getById($id);
//        dd($blog);
        return view('backend.blog.detail', compact('blog'));

    }

    public function edit($id)
    {
        $blog = $this->blogRepository->getById($id);
        $categories = $this->categoryRepository->getAll();
        return view('backend.blog.update', compact('blog','categories','id'));

    }

    public function update(Request $request, $id)
    {
        $this->blogRepository->update($request,$id);
        return redirect(route('blog.indexAuth'));


    }

    public function destroy($id)
    {
        $this->blogRepository->deleteById($id);
        return redirect(route('blog.indexAuth'));

    }
}
