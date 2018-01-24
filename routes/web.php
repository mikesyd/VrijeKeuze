<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});

Route::get('/Hallo/{name}/{location}', 'GroetjesController@groeten');


Route::get('/product', function(){

    $product = App\Product::where('type','phone')->get();
    echo "<pre>";
    print_r($product);
    echo "</pre>";
});

Route::get('/producten', function(){

    $producten = App\Producten::where('type', 'telefoon')->get();

    foreach($producten as $products){
        echo $products->name. $products->beschrijving;
    }
});

Route::get('/add/{name}', function ($name){

    $newproduct = new App\Product;

    $newproduct->name = $name;
    $newproduct->description = "Sterke dingen";
    $newproduct->type = "Phone";

    $newproduct->save();
});

Route::get('/car/{car}', function(\App\Car $car){

    //$car = App\Car::find($id);


    echo $car->owner->name;
});

Route::get('/owner/{owner}', function(\App\Owner $owner){
        foreach($owner->cars as $car){
            echo $car->name."<br>";
        }
//    $owner = App\Owner::find($id)->car;

//    foreach($owner as $car){
//        echo $car->make;
//    }
});