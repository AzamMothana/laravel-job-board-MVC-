<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    function index(){
        $data = Comment::paginate(5);
        //pass the data to the view
        return view('comment.index' , ['comments' => $data , "pageTitle"=> 'Blog']);
    }

    function create(){
        // $comment = Comment::create([
        //     'author'=> 'Azam Khaled',
        //     'content'=> 'this is another test Comment',
        //     'post_id'=> 3,
        // ] );

        Comment::factory(50)->create();

        return redirect('/comments');
        }


}
