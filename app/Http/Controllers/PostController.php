<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    function index(){
        $data = Post::Paginate(5);
        //pass the data to the view
        return view('post.index' , ['posts' => $data , "pageTitle"=> 'Blog']);
    }

    function show($id){
        $post = Post::find($id);
            return view('post.show',['post' => $post , "pageTitle" => "Show"]);
    }

    function create(){
        // $post = Post::create([
        //     'title'=> 'this is the New title',
        //     'body' => 'New Content ',
        //     'author'=> 'Azam Khaled',
        //     'published'=> false,
        // ] );
        
        Post::factory(100)->create();

        return redirect('/blog');
        }

    function delete(){
        Post::destroy(3);
    }
}
