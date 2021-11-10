<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showForm()
    {
        return view('Form');
    }

    public function debug(Request $request) 
    {
        //método: all()
        //para colocar uma exceção num valor para não persistir no DB
        var_dump($request->except(['_token']));

        //quando for persistir dados no DB, deve ser feito assim:
        $post = new Post();//instance the model
        //$post->title = $request->title;
        //$post->subtitle = $request->subtitle;
        //$post->content = $request->content;
        //$post->save();
        //informar uma array associativa para persistir as informações no DB  
        $post->create($request->except(['_token']));


    }
}
