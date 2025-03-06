<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controller;

Route::get('/', function () {
    return view('pages.welcome');
});
Route::get('/home/{name}', function () {
    return "hello";
})->middleware('App\Http\Middleware\IsAouth');

// URI , view , array of data

Route::view('about', 'pages.about', ['name' => 'Ali', 'age' => '25'])->name('about');

Route::get('file', function(){
   $name = request("name");
   // requset in the URL will be like this /file?name=ali
   // request() define the optional parameter in URL will be like this /file?name=ali
   return $name;
});

Route::get('pages/{id}', function($id){
    return "the page number is $id";
});


Route::get('category/{id}/{name}', function($id, $name){

    $categories = [
        1 => 'laptop',
        2 => 'mobile',
        3 => 'tablet'
    ];
    return view(('pages.category'), [
        'category' => $categories[$id],
        'name' => $name
    ])->with('owner','mohamed');

});

Route::view('layout', 'pages.layout');

use App\Http\Middleware\IsAouth;
Route::get('mybooking1', 'App\Http\Controllers\BookingController@play')->middleware(IsAouth::class);
// namespace\controller@function
use App\Http\Controllers\BookingController;
Route::get('mybooking2', BookingController::class . '@sleep')->name('mybooking');
Route::get('mybooking3/{name}', BookingController::class . '@drink')->name('mybooking');
