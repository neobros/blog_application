<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Blog;
use App\Repositories\UserRepositoryInterface;

class MainController extends Controller
{
    protected $userRepository;

    // Inject UserRepository
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $response = $this->userRepository->login($credentials);

        if( $response == true)
        {
            return redirect()->intended('/')->with('success', 'Login Successfully.');
        }else
        {
            return redirect()->back()->with('unsucces', 'These credentials do not match our records!');
        }
    
    }

    public function logout()
    {
        $this->userRepository->logout('user');

        return redirect('/')->with('message', 'Successfully logged out');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);
    
        $responce = $this->userRepository->register($request->all());
        Auth::guard('user')->login($responce);

        return redirect()->intended('/')->with('success', 'Login Successfully.');
     
    }

    public function blog(Request $request)
    {
        $getBlogList = $this->userRepository->getBlogList();

        return view('user.blog')->with([
            'blogList'  =>   $getBlogList,     
        ]);
     
    }

    public function post_blog(Request $request)
    {
        return view('user.post_blog');

    }

    public function store_blog(Request $request)
    {
        $request->validate([
            'title'      => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'description'    => 'required',
        ]);

        try{

            if ($request->file('image')) {
                $image = $request->file('image');
                $imageName = str_replace('.', '', microtime(true)) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
            }

            $product = new Blog([
                    'title' =>$request->title,
                    'image' =>$imageName,
                    'description' =>$request->description,
                    'user_Id' => Auth::guard('user')->user()->id,
            ]);

            $product->save();
            
            return redirect()
            ->back()
            ->with('success', 'New blog added successfully.');

        }
        catch(\Exception $error){
            return redirect()
            ->back()
            ->with('unsucces', 'Something goes wrong. Please try again.');
        }

    }

    public function single_blog($id)
    {
        $getBlogData = $this->userRepository->getBlogData($id);

        return view('user.single_blog')->with([
            'blogList'  =>   $getBlogData,     
        ]);
    }

}
