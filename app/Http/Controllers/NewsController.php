<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News ;

class NewsController extends Controller
{
    private $columns = ['title','content','author','published'];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = news :: get(); 
        return view('posts', compact ('posts'));  //posts blade file
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news');  
      }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = new news;
        $news->title = $request->title;
        $news->content = $request->content;
        $news->author = $request->author;
        $published = $request->published;
        if(isset($request->published)){
            $news->published = true;
        }else{
            $news->published = false;
        }
        
        $news->save();
        return " news data added";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $post = news::findOrFail($id);
        return view('postDetails',compact('post'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $post = news::findOrFail($id); //
        return view('editpost', compact ('post')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? true:false;

        news::where('id', $id)->update($data);
        return 'updated';    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        news :: where('id', $id)->delete();

        return 'deleted';    }
}
