<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; 
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
   
    

        public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'=>'required|string',
            'content'=>'required|string|max:100',
            'author'=>'required|string'
        ]);

        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? true : false;
       
        news::create($data);
        return redirect ('posts');
    }
    //     $news = new news;
    //     $news->title = $request->title;
    //     $news->content = $request->content;
    //     $news->author = $request->author;
    //     $published = $request->published;
    //     if(isset($request->published)){
    //         $news->published = true;
    //     }else{
    //         $news->published = false;
    //     }
        
    //     $news->save();
    //     return " news data added";
    // }

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

        return redirect ('posts');
}
public function delete(string $id): RedirectResponse
    {
        news :: where('id', $id)->forceDelete();

     return redirect ('trashedNews');   
     }



public function trashed()
    {
        $posts = news::onlyTrashed()->get();
    return view('trashedNews', compact('posts'));
    }

    public function restore(string $id): RedirectResponse
    {
       news :: where('id', $id)->restore();
        return redirect ('posts');
    }


}