<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::where('status',1)->paginate(5);
        $blogRecent = Blog::where('status',1)->orderBy('created_at', 'desc')->limit(5)->get();
        return view('site.blog.index',['blog' => $blog, 'blogRecent' => $blogRecent]);
    }

    public function show($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        if (!$blog) {
            abort(404);
        }
        $blogRecent = Blog::where('status',1)->orderBy('created_at', 'desc')->limit(5)->get();
        return view('site.blog.show',['b' => $blog, 'blogRecent' => $blogRecent]);
    }
}