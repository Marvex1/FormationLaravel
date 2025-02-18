<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\postsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/home', function () {
//     return view('home');
// });
route::view('/about','about');
route::get('/home',[homeController::class,'home']);
route::get('/blog/{$myid}/{$book?}',[homeController::class,'blog'])->name('blog');
// route::get('/posts',[postsController::class,'posts']);
// route::get('/post/{id}/{book?}',function($myid,$book){
//     $posts=[
//         1=>["title"=>"laravel"],
//         2=>['"title'=>"php"]
//     ];
//     return view("post",["data"=>$posts[$myid]]);
// });
route::get('/show',function(){
    return view("post.show");
});
// route::view('/show',"post.show");