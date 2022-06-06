<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnityController extends Controller
{
    public function index() 
    {
        return view('index', [
            "title" => "Game",
            "active" => "game"
        ]);
    }
}
