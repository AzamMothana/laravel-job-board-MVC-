<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    function index(){
        $data = Tag::paginate(5);
        //pass the data to the view
        return view('tag.index' , ['tags' => $data , "pageTitle"=> 'Tags']);
    }

    function create(){
        $tag = Tag::create([
            'title'=> 'CSS dev',
        ] );

        // Tag::factory(20)->create();

            return redirect('/tags');
        }

    function testManyToMany(){
        // $post1 = Post::find(1);
        // $post2 = Post::find(2);

        // $post1->tags()->attach([1,4]);
        // $post2->tags()->attach([1]);

        // return response()->json([
        //     'post1'=> $post1->tags,
        //     'post2'=> $post2->tags
        // ]);

        $tag = Tag::find(2);

        $tag->posts()->attach([2]);

        return response()->json([
            'tag' => $tag->title,
            'posts' => $tag->posts
        ]);
    }

    

}
