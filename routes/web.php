<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowCarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

// Route::get('/', function () {
//     // return view('welco');
//     $person = [
//         'name' => 'Arpit Mishra',
//         'email' => 'arpit@gmail.com',
//     ];
//     // dump($person);
//     return 'Hello World!';
// });


// Route::get('/home',function()
// {
//     return 'Welcome to Home';
// });


// Route::get('/about',function()
// {
//     return view('about');
// });


// Available Request Methods
// Route::get($url,$callback);
// Route::post($url,$callback);
// Route::put($url,$callback);
// Route::patch($url,$callback);
// Route::delete($url,$callback);
// Route::options($url,$callback);

// Route that matches multiple route Methods
// Route::match(['get','post'],'/',function(){

// });


// Route that matches all request Methods
// Route::any('/',function(){

// });

// Redirect routes
// Route::redirect('/home','/');

// view routes
// Route::view('/','home');

// Route Parameters

// Route::get('/product/{id}',function(String $id)
// {
//     return "Product ID IS: " . $id;
// });

// Route::get('{lang}/product/{id}/review/{reviewID}',function(String $lang, String $id, String $reviewID)
// {
//     return "Chossen language is " . $lang . "Product ID IS: " . $id . " Review ID IS: " . $reviewID;
// });

// optional para,eters

// Route::get('/product/{category?}',function(string $category = null)
// {
//     return "Product Category is: " . $category;
// });


// Setting the Route Constraints

// Route::get("/product/{id}",function (string $id)
// {
//      // this will only works when id is numeric
// })->whereNumber("id");
// Route::get("/product/{product_name}",function (string $product_name)
// {
//      // this will only works when id is string like 'name','city; not numbers or contains numbers
// })->whereAlpha("product_name");

// //  Adding Multiple Constraints
// Route::get('{lang}/product/{id}',function (string $lang, string $id){

// })->whereAlpha("lang") // will accept only alphabets to lang parameter
// ->whereNumber('id'); // will accept only numbers to id parameter


//  setting list of values for route parameters

// Route::get('/{lang}/languages',function(string $lang)
// {
//     return $lang;
// })->whereIn("lang",['eng','hindi','spanish','german','italian']);

// Route Parameter Regex

// Route::get('/user/{username}/',function(string $username)
// {
//     return $username;
// })->where('username','[a-z]+');


// setting multiple regex expression and constraint roue
// Route::get('{lang}/product/{id}',function (string $lang, string $id){
//     return $lang . " " . $id;
// })->where(['lang' => '[a-z]{2,}','id' => '\d{4,}']);

// Route::get('/',function()
// {
//     $productURL = route('product.view',['lang' => 'english','id' => 128]);
//     dd($productURL);

//     return view('welcome');
// });


// Route::get('/{lang}/product/{id}',function(string $lang,string $id)
// {
//     //
// })->name('product.view');


// Route::get('/user/profile', function(){
//     return 'USER PROFILE';
// })->name('profile');
// Route::get('/current-user',function()
// {
//     // return redirect()->route('profile');
//     return to_route('profile');
// });


// Route Groups

// Route::prefix('admin')->group(function(){
//     Route::get('/inventory',function()
//     {
//         return 'inventory';
//     })->name('inventory');
//     Route::get('/sales',function()
//     {
//         return 'sales';
//     })->name('sales');
//     Route::get('/collections',function()
//     {
//         return 'collections';
//     })->name('collections');
//     Route::get('/tickets',function()
//     {
//         return 'tickets';
//     })->name('tickets');
// });


// fallback Routes

// Route::get('/add/{num1}/{num2}',function(string $num1, string $num2)
// {
//     return 'The sum of two numbers is '.((int)$num1 + (int)$num2);
// })->whereNumber('num1')
//  ->whereNumber('num2');


// Route::fallback(function()
// {
//     return 'Sorry Page you are look
//     for is not found';
// });

// Route::get('/index',[CarController::class,'index']);

// Grouping By The Controller

// Route::controller(CarController::class)->group(function()
// {
//     Route::get('/index', 'index');
//     Route::get('/create', 'create');
//     Route::get('/edit', 'edit');
//     Route::get('/delete', 'delete');
// });


// calling single action controllers

// Route::get('/cars',ShowCarController::class);

// Route for ProductController which is a resource controller

// Route::resource('/products',ProductController::class)->except(['destroy']);
// Route::resource('/products',ProductController::class)->only(['index','create']);

// for Api Resource
// Route::apiResource('/products',ProductController::class);

// defining Multi[ple ] api Resource

// Route::apiResource([
//     'cars' => CarController::class,
//     'producs' => ProductController::class,
// ]);


// Route::controller(CalculatorController::class)->group(function()
// {
//     Route::get('/sum/{a}/{b}','add')->whereNumber(['a','b']);
//     Route::get('/sub/{a}/{b}','subtract')->whereNumber(['a','b']);
// });

Route::prefix('/cars')->controller(HomeController::class)->group(function()
{
    Route::get('index','index');
    // Rendering view using different Facades

})->name('home');

Route::get('/hello',[HelloController::class,'welcome']);
// Route::get('/new-car',function)
Route::view('/test','test');
