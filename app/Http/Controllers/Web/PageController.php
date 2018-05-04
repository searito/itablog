<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;


class PageController extends Controller
{
    public function blog(){
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web/posts', compact('posts'));
        #return view('web.post')->with('posts', $post);
    }


    public function post($slug){
        $post = Post::where('slug', $slug)->first();  //SE USA FIRST XQ SOLO RETORNAMOS UN ARTICULO
        
        return view('web/post', compact('post'));
    }
}
