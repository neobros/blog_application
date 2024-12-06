<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//--------------------------------------User--------------------------------------------
Route::get('/', function () {
    return view('user.home');
});

Route::get('/login', function () {
    return view('user.auth.login');
});

Route::get('/register', function () {
    return view('user.auth.register');
});

Route::post('/login',                                               [App\Http\Controllers\user\MainController::class, 'login'])->name('login');
Route::post('/register',                                            [App\Http\Controllers\user\MainController::class, 'register'])->name('register');
Route::post('/logout',                                              [App\Http\Controllers\user\MainController::class, 'logout'])->name('logout');
Route::get('/blog',                                                 [App\Http\Controllers\user\MainController::class, 'blog'])->name('blog');
Route::get('/single_blog/{id}',                                     [App\Http\Controllers\user\MainController::class, 'single_blog'])->name('single_blog');



Route::middleware('user')->group(function () {

    Route::get('/post_blog',                                            [App\Http\Controllers\user\MainController::class, 'post_blog']);
    Route::post('/store_blog',                                          [App\Http\Controllers\user\MainController::class, 'store_blog']);

});



//--------------------------------------Admin--------------------------------------------
Route::get('/admin/login', function () {
    return view('admin.auth.login');
});
Route::post('/admin/login',                                          [App\Http\Controllers\Admin\MainController::class, 'login'])->name('admin.login');
Route::post('/admin/logout',                                         [App\Http\Controllers\Admin\MainController::class, 'logout'])->name('admin.logout');



Route::middleware('admin')->group(function () {

    Route::get('/admin/dashboard',                                       [App\Http\Controllers\Admin\MainController::class, 'dashboard']);
    Route::get('/admin/userList',                                        [App\Http\Controllers\Admin\MainController::class, 'userList']);
    Route::get('/admin/blogList',                                        [App\Http\Controllers\Admin\MainController::class, 'blogList']);
    
});