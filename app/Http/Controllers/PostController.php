<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data = Post::Paginate(5);
        //pass the data to the view
        return view('post.index' , ['posts' => $data , "pageTitle"=> 'Blog']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create' ,["pageTitle"=> 'Blog - create new post'] );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //todo this will be complated in the form section 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('post.show',['post' => $post , "pageTitle" => $post->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('post.edit' ,['post' => $post ,"pageTitle"=> 'Blog - edit post'] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //todo this will be complated in the form section 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //todo this will be complated in the form section 
    }
}
