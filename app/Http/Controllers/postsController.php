<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postsController extends Controller
{
    public function posts($myid){
        $posts=[
            1=>["title"=>"Laravel"],
            2=>["title"=>"PHP"]
        ];
        return view("/posts/{id",["data"=>$posts[$myid]]);
    }
}
