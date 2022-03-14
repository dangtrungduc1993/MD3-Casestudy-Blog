<?php

namespace App\Services;
use App\Models\User;
use App\Repositories\BlogRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BlogService extends BaseService
{
    public $blogRepository;
    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function login($request)
    {
        $data = $request->only('email','password');
        if (Auth::attempt($data)){
            return true;
        }else{
            return false;
        }

    }

    public function register($request)
    {
        $user = $request->only('name','email','password');
        $user["password"]= Hash::make($user["password"]);
        $user = User::create($user);
        return $this->sendResponse($user,'Create user successfully',201);

    }


}
