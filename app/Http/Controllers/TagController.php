<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tag::all();
        //pass the data to the view
        return view('tag.index' , ['tags' => $data , "pageTitle"=> 'Tags']);
 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tag.create' ,["pageTitle"=> 'tag - create new tag'] );

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //todo 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tag = Tag::find($id);
        return view('tag.show' , ['tag' =>$tag , 'pageTitle'=> "Tage Name"]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tag = Tag::find($id);
        return view('tag.edit' , ['tag' => $tag ,'pageTitle' =>'Edit Tag']);
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
