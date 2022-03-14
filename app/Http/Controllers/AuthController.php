<?php

namespace App\Http\Controllers;

use App\Services\BlogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public $blogService;
    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;

    }

    public function showForm()
    {
        return view("backend.auth.register");

    }

    public function register(Request $request)
    {
        $response = $this->blogService->register($request);
//        dd($response["message"]);
        return redirect()->route('login');
    }

    public function showFormLogin()
    {
        return view("backend.auth.login");


    }

    public function login(Request $request)
    {
        if ($this->blogService->login($request)){
            return redirect()->route('blog.indexAuth');
        }else{
            \Illuminate\Support\Facades\Session::flash("error","Tai khoan khong dung");
            return redirect()->back();

        };
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');

    }
}
