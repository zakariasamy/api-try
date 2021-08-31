<?php

namespace App\Http\Controllers\API;

use App\Models\API\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function all(){
        return Post::all();
    }
    public function show($id){
        return Post::where('id', $id)->first();
    }
}
