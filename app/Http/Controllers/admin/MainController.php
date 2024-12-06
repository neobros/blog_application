<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Blog;
use App\Repositories\AdminRepositoryInterface;

class MainController extends Controller
{

    protected $adminRepository;

    // Inject UserRepository
    public function __construct(AdminRepositoryInterface $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $response = $this->adminRepository->login($credentials);

        if( $response == true)
        {
            return redirect()->intended('/admin/dashboard')->with('success', 'Login Successfully.');
        }else
        {
            return redirect()->back()->with('unsucces', 'These credentials do not match our records!');
        }
    
    }
    
    public function logout()
    {
        $this->adminRepository->logout('admin');

        return redirect('/admin/login')->with('message', 'Successfully logged out');
    }


    public function dashboard()
    {
        $totalUsers  = User::where('role', 0 )->count();
        $totalBlog  = Blog::count();

        return view('admin.dashboard')->with([
            'totalUsers'  =>  $totalUsers, 
            'totalBlog'  =>  $totalBlog, 
        ]);
    }

    public function userList()
    {
        $userList = User::where('role', 0 )->get();
        
        return view('admin.userList')->with([
            'userList'  =>  $userList, 
        ]);
    }

    public function blogList()
    {
        $blogList = Blog::get();
        
        return view('admin.blogList')->with([
            'blogList'  =>  $blogList, 
        ]);
    }
}
