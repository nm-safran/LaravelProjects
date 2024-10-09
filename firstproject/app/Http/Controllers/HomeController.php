<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        // $allCategories = ['Category 1','Category 2'];

        // $allCategories = Category::all();
        $categories = Category::all();
        // $posts=post::orderBy('id','desc')->get();
        $posts = Post::when(request('category_id'), function ($query) { 
            $query->where('category_id', request('category_id'));
        })->latest()->get();

        // return view('home',['categories'=>$allCategories, 'posts' => $posts]);
        return view('home', compact('categories', 'posts'));
    }
}
