<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Common;

class ExampleController extends Controller
{
    use Common;
    public function test1(){
        return view("login");
}
public function showUpload(){
    return view("upload");


}
public function place(){
    return view("place");


}

public function blog(){
    return view("blog");


}
public function mySession(){
    session()->put('test', 'First Laravel session');
    $data = session('test');
    return view("session",compact('data'));

}


public function upload(Request $request){
    // $file_extension = $request->image->getClientOriginalExtension();
    //     $file_name = time() . '.' . $file_extension;
        
    //     $path = ' assets/images'; 
        
    //     $request->image->move($path, $file_name);
        $fileName = $this->uploadFile( $request->image, 'assets/images');
        return $fileName;
}

public function received (Request $request){
    $msg = "your email is : " . $request->email . "<br> and password is :" . $request->pwd;
    return $msg;
}
}

