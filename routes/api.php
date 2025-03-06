<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/* ------------------  API Routes  ------------------ */
// api.php is used to define the routes for the API
// The routes defined in api.php are stateless and are protected by default
// The routes defined in api.php are prefixed with /api

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// when request type changes it will be like different endpoints

Route::get('/cake', function(){
    return "cake";
});
Route::post('/cake', function(){
    return response()->json(['data'=>"post method cake"]);
});
Route::delete('/cake', function(){
    return response()->json(['data'=>"delete method cake"]);
});
Route::put('/cake', function(){
    return response()->json(['data'=>"put method cake"]);
});
Route::patch('/cake', function(){
    return response()->json(['data'=>"patch method cake"]);
});

 use App\Http\Controllers\API\UserController ;
 use App\Http\Controllers\API\ArticleMake ;

Route::post('/makeUser' , UserController::class.'@createUser');

Route::post('/article' , ArticleMake::class.'@createArticle')->middleware('auth:sanctum');
// middleware sanctum is used to protect the route by checking the token

Route::get('/articleGet' , ArticleMake::class.'@getArticle');
Route::get('/articleGet/{id}' , ArticleMake::class.'@getArticleById');
Route::delete('articleD/{id}', ArticleMake::class.'@deleteArticle')->middleware('auth:sanctum');
// Auothrization is done by middleware sanctum

Route::put('articleU/{id}', ArticleMake::class.'@updateArticle');

Route::post('/register', UserController::class.'@register');
Route::post('/login', UserController::class.'@login');