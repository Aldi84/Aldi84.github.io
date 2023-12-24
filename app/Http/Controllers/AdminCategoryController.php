<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;


class AdminCategoryController extends Controller
{

    
        public function index(){

            // if(auth()->guest() ||(auth()->user()->username !== 'hafiz')){
            //     abort(403);
            // }
            
        //    $this->authorize('admin'); 
           return view('dashboard.categories.index',[
            'categories' => Category::all()
           ]);
        }
}
