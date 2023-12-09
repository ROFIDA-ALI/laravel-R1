<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; 

use App\Models\Place;
use App\Traits\Common;
class PlaceController extends Controller
{
    use Common; 
    private $columns = ['title','description','image','category','from','to'];
    /**
     * Display a listing of the resource.
     */
    public function explore()
    {
        // $places = DB::table('places')->latest ('id','desc')->limit(6)->get();
        // return view('blog', compact ('places'));
        $places = Place ::latest()
        ->orderBY('created_at','desc')
        ->take(6)
        ->get();

        return view('explore', compact ('places')); 
    }

    public function place()
    { 
        $places = Place::get();
        return view('place', compact ('places'));     
    
    }

    /**
     * Show the form for creating a new resource.
     */  
    public function create()
    {
        return view('addPlace'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
    
        $messages=$this ->messages();
        $data =$request->validate ([
            'title'=>'required |string',
             'description' => 'required |string',
             'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
             'category'=>'required |string',
             'from'=>'required |string',
             'to'=>'required |string'

            ], $messages);
            if ($request ->hasFile('image')){

            $fileName = $this->uploadFile( $request->image, 'assets/images/explore');
            $data['image']=$fileName;}
            Place ::create($data);
            return redirect ('explore');

    }
    public function messages(){
        return [ 'title.required' => 'Title is required', 
        'description.required' => 'should be text',
        'image.required' => 'should be png,jpg,jpeg|max:2048',
        'category.required' => 'Category is required', 
        'from.required' => 'should be number',
        'to.required' => 'should be number'

    ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
