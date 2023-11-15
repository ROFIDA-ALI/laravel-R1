<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return 'welcome to my first route';
});

// Route::get('user/{name}/{age}', function ($name,$age) {
//     return 'The username is : ' . $name . ' and age is : '. $age;
// });


// Route::get('user/{name}/{age?}', function ($name,$age=0) {
//     return 'The username is : ' . $name . ' and age is : '. $age;
// });


// Route::get('user/{name}/{age?}', function($name, $age=0)
// {
//     if($age==0)
//     {
//         return 'The username is : ' . $name ;

//     }
//  else {
//     return 'The username is : ' . $name . ' and age is : '. $age;

//  }   

// });

// Route::get ('user/{name}/{age?}',  function ($name,$age=0) {
//     $msg = 'the username is : ' . $name;

// if($age > 0) {

// $msg .= ' and the age is: '. $age;

// }

// return $msg;
// })->whereAlpha('name');

//})->whereNumber('age');
//})->where(['age' => '[0-9]+']);

// Route::get ('user/{name}/{age?}',  function ($name,$age=0) {
// return 'The username is : ' . $name . ' and age is : '. $age;
// //})->where(['age'=>'[0-9]+', 'name'=>'[a-zA-Z0-9]+']);
// })->whereIn('name',['rofida','ali']);

// Route::prefix('products')->group(function(){
//     Route::get ('/', function (){
//         return 'products home page';
//     });

//     Route::get ('laptop', function (){
//          return 'laptop page';

// });
// Route::get ('camera', function (){
//     return 'camera page';

// });
// });

Route::prefix('Web structure')->group(function(){
    Route::get ('/', function (){
        return 'Home page';
    });

    Route::get ('About', function (){
         return ' Know More About Us';

});
Route::get ('Contact us', function (){
    return ' You Can Contact us  ';

});
Route::prefix('Support')->group(function(){
    Route::get ('/', function (){
        return 'Get Our Supporte';
    });
    Route::get ('Chat', function (){
        return ' Chat Page';

});
Route::get ('Call', function (){
    return ' Call Us';

});
Route::get ('Ticket', function (){
    return ' Ticket page ';

});
});
Route::prefix('Training')->group(function(){
    Route::get ('/', function (){
        return 'Training Page ';
    });
    Route::get ('HR', function (){
        return ' HR Page';

});
Route::get ('ICT', function (){
    return 'ICT Page ';

});
Route::get ('Marketing', function (){
    return ' Marketing page ';

});
Route::get ('Logistics', function (){
    return ' Logistics page ';

});
});
});

// Route::fallback(function() {
//     return redirect('/');
//     });
Route::get('cv', function () {
    return view('cv');
});
Route::get('login', function () {
    return view('login');
});

Route::post('receive', function () {
    return 'data received';
})->name('receive');

Route::get('test1', [ExampleController::class, 
'test1']);
