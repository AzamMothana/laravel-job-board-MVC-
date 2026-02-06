<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Comment::paginate(5);
        // //pass the data to the view
        // return view('comment.index' , ['comments' => $data , "pageTitle"=> 'Comment']);
        redirect('/blog');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        redirect('/blog');
        // return view('comment.create' ,["pageTitle"=> 'Comment - create new comment'] );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = Post::findOrFail($request->input("post_id"));

        $comment = new Comment();

        $comment->author = $request->input("author");
        $comment->content = $request->input("content");
        $comment->post_id = $request->input("post_id");

        $comment->save();

        return redirect("/blog/{$post->id}")->with('success', 'Comment Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $comment = Comment::find($id);
        return view('comment.show',['comment' => $comment , "pageTitle" => 'Show One Comment']);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $comment = Comment::find($id);
        // return view('comment.edit' , ['comment' => $comment ,'pageTitle' => 'edit comment']);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //todo
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //todo
    }
}
