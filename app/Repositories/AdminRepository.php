<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Blog;
use DB;
use Illuminate\Support\Facades\Hash;

class AdminRepository implements AdminRepositoryInterface
{

    public function login(array $credentials)
    {
        if (Auth::guard('admin')->attempt($credentials)) {
            return true;
        }
        return false;;
    }
   

    public function logout($role)
    {
        if($role == 'user' )
        {
            Auth::guard('user')->logout();
            request()->session()->invalidate();
            //Regenerate session token to prevent session fixation attacks
            request()->session()->regenerateToken();
        }

        if($role == 'admin' )
        {
            Auth::guard('admin')->logout();
            request()->session()->invalidate();
            //Regenerate session token to prevent session fixation attacks
            request()->session()->regenerateToken();
        }

        return;
    }

    public function getBlogList()
    {
        return Blog::join('users', 'blogs.user_Id', '=', 'users.id')->select('blogs.*', 'users.name')->paginate(10);
    }
    
    public function getBlogData($id)
    {
        return Blog::join('users', 'blogs.user_Id', '=', 'users.id')->where('blogs.id', $id)->select('blogs.*', 'users.name')->first();
    }
}
