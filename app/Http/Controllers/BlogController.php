<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::where('status',1)->paginate(5);
        // dd($blog);
        return view('site.blog.index',['blog' => $blog]);
    }

    public function show($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        // dd($blog);
        return view('site.blog.show',['b' => $blog]);
    }
}