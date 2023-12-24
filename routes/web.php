<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "home",
        "active" => "home",

    ]);
});

Route::get('/about', function () {
    return view('about', [
        "active" => "about",
        "title" => "about",
        "name" => "Hafiz Rivaldi",
        "email" => "hafizrivaldi7@gmail.com",
        "image" => "foto 2.png"
    ]);
});



    
//Buat MENU POSTS
Route::get('/posts', [PostController::class, 'index']);
    //halaman singgle post
Route::get('/post/{post:slug}', [PostController::class, 'show']);

// bila di ketik kategori pada link url maka akan muncul semua kategori
Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
        // halaman kategori
// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         'active' => 'categories',
//         'title' =>"Category : $category->name",
//         'posts' => $category->posts->load(['category','user'])
//     ]);
// });
// halaman author
Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'active' => 'author',
        'title' => "Author : $author->name",
        'posts' => $author->posts->load(['category','user'])
    ]);
});


Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('auth');