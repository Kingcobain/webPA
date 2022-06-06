<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnityController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function() {
    return view('about', [
        "title" => "About",
        "active" => 'about'

    ]);
});

Route::get('/category', function(){
    return view('category', [
        "title" => "Category",
        "active" => 'category'
    ]);
});

Route::get('/game', [UnityController::class, 'index']);