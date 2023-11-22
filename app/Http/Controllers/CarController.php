<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car ;
class Carcontroller extends Controller
{
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
   
    public function store(Request $request)
    {
        $cars = new car;
        $cars->carTitle = $request->carTitle;
        $cars->description = $request->description;
        $published = $request->published;
        if(isset($request->published)){
            $cars->published = true;
        }else{
            $cars->published = false;
        }
        
        $cars->save();
        return " cars data";
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
        $car = Car::findOrFail($id);
        return view('editcar', compact ('car'));     }

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
