<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\Categoria;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function  index(){

        $posts= Post::all();
        
        return view('admin.posts.index', compact('posts'));
    }
    
    public function  create(){

        $posts= Post::all();
        $categorias= Categoria::all();
        $tags= Tag::all();
        
        return view('admin.posts.create', compact('categorias','tags'));
    }

    public function  storage(Request $request){
        
        //return $request->all();

        $posts= new Post;
        $posts ->title = $request->get('title');
        $posts ->body = $request->get('body');
        $posts ->excerpt = $request->get('excerpt');
        $posts ->published_at =Carbon::parse($request->get('published_at'));
        $posts ->category_id = $request->get('categoria') ;
        // Etiquetas
        $posts->save();

        $posts->tags()->attach($request->get('tags'));

        return back();
    }


}
