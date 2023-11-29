<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; 

use App\Models\Car ;
class Carcontroller extends Controller
{
    private $columns = [
        'carTitle' ,'description', 'published']; //same #name in blade file 



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car :: get(); //Car "model name"
        return view('cars', compact ('cars')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addCar');  //blade name
    }

    /**
     * Store a newly created resource in storage.
     */
   
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'carTitle'=>'required|string',
            'description'=>'required|string|max:100'
        ]);
        
        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? true : false;
       $request->validate([
            'carTitle'=>'required|string',
            'description'=>'required|string|max:100'
        ]);
        
        Car::create($data);
        return redirect ('Cars');


        // $cars = new car;
        // $cars->carTitle = $request->carTitle;
        // $cars->description = $request->description;
        // $published = $request->published;
        // if(isset($request->published)){
        //     $cars->published = true;
        // }else{
        //     $cars->published = false;
        // }
        
        // $cars->save();
        // return " cars data";
    }

    /** 
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::findOrFail($id);
        return view('carDetails',compact('car'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        return view('editcar', compact ('car'));     }

    /**
     * Update the specified resource in storage.
     */ //Car model name
    public function update(Request $request, string $id) 
    {
    //    Car::where('id', $id)->update($request->only($this->columns));
    //     return 'updated';
   
    

        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? true:false;

        Car::where('id', $id)->update($data);
        return 'updated';
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car :: where('id', $id)->delete();

        return redirect ('Cars');
    }

    public function delete(string $id): RedirectResponse
    {
     Car :: where('id', $id)->forceDelete();

     return redirect ('trashed');   
     }

    public function trashed()
    {
    $cars = Car::onlyTrashed()->get();
    return view('trashed', compact('cars'));
    }

    public function restore(string $id): RedirectResponse
    {
        Car :: where('id', $id)->restore();
        return redirect ('Cars');
    }


}
