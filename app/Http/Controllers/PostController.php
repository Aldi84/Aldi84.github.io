<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    public function index()
    {
        return view('posts', [
            "title" => "PILIH ARTIKEL",
            "active" => 'posts',
            // buat naikin performa pke with diikutin parameter ([''])
            "posts" =>  Post::latest()->filter(request(['search', 'category', 'author']))->paginate(4)->withQueryString()
                ]);
    
    }

    public function show(Post $post)
    {

        return view('post',[
            "title" => "singglepost",
            "active" => "posts",
            "post" => $post
            
        ]);
    }
}