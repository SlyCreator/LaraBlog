<?php


namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        
        return view('layouts.admin.admin',compact('posts'));
    }
}
