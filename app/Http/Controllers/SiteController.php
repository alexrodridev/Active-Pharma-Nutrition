<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('inicial');
    }

    public function userconta()
    {
        return view('site.contauser.cart');
    }
    
    public function checkout()
    {
        return view('site.contauser.checkout');
    }
}