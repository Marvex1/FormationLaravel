<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function blog($myid){
        $posts=[
            1=>["title"=>"Laravel"],
            2=>["title"=>"PHP"]
        ];
        return view('post.posts',["data"=>$posts[$myid]]);
    }
}