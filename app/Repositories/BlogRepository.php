<?php

namespace App\Repositories;
use App\Models\Blog;
use http\Env\Request;

class BlogRepository extends BaseRepository
{
//    public $table = 'blogs';
    public function getModel()
    {
        return Blog::class;
    }

    public function store($request)
    {
        $blog = new Blog();
        $blog->name = $request->name;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->category_id = $request->category_id;
        $blog->save();

    }

    public function update($request,$id)
    {
        $blog = new Blog();
        $blog->name = $request->name;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->category_id = $request->category_id;
        $blog->save();
    }

}
