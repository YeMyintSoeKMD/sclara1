<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{AboutController, ContactController, ArticleController};

Route::get('/', function () {
    return view('welcome');
});


Route::get('greet',function(){
    echo "Hello";
});

Route::get('greet/developer',function(){
    return "Hello Devs";
});


Route::get('greet/developer/{name}',function($name){
    echo "Hello ". $name;
});

Route::get('about', [AboutController::class, 'index']);
Route::get('contact',[ContactController::class, 'index']);

// article
// read
Route::get('articles',[ArticleController::class, 'index']);
// create form
Route::get('articles/create',[ArticleController::class, 'create']);
// create
Route::post('articles',[ArticleController::class, 'store']);
// edit form
Route::get('articles/{id}/edit',[ArticleController::class, 'edit']);
// update
Route::put('articles/{id}',[ArticleController::class, 'update']);
// delete
Route::delete('articles/{id}',[ArticleController::class, 'destroy']);