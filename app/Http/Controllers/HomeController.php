<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() 
    {
        return view('home', [
            "title" => "Home",
            "active" => 'home',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }
}
