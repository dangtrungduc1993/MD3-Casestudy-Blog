<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
{
    $users = User::all();
//        dd($blogs);
    return view('backend.user.list',compact('users'));
}

//    public function create()
//    {
//        return view('backend.user.create');
//    }
//
//    public function store(Request $request)
//    {
//        $user = new User();
//        $user->name = $request->name;
//        $user->email = $request->email;
//        $user->password = $request->password;
//        $user->save();
//
//        return redirect()->route('user.index');
//    }

    public function show($id)
    {
        $user = DB::table('users')->where('id',$id)->first();
        return view('backend.user.detail',compact('user'));

    }

//    public function edit($id)
//    {
//        $user = DB::table('users')->where('id',$id)->first();
//        return view('backend.user.update',compact('user'));
//
//    }

//    public function update(Request $request, $id)
//    {
//        $user = $request->only('name','email','password');
//        DB::table('users')->where('id',$id)->update($user);
//        return redirect(route('user.index'));
//
//
//    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect(route('user.index'));

    }
}
