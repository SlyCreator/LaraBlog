<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $posts = Post::latest()->paginate(5);
          return view('layouts.frontend.index',compact('posts'));

          // return response()->json(Post::get(),200);

       /* foreach($posts as $post)
            {
               return response()->json(['category_name',$this->getCategoryName($post->category_id)]) ;
            }
        */
    }
 
    public static function getCategoryName($id)
    {
        $category_name= Category::where('id',$id)->first();
        return $category_name->category_name;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'post_title'=>'required',
            'body'=>'required',
            'author_id'=>'required',
            'image'=>'required',
            'category_id'=>'required'
            ]);
        $post = Post::create($request->all());
        return response()->json($post,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = Post:: find($post->id);
        return view('post',['post'=>$post]);
        
        //return response()->json(Post::find($id),200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return response()->json($post,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        
    }
}
