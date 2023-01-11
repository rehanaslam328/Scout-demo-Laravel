<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;     
use PDF;
class PostController extends Controller
{
    public function create(){
    	return view('create');
    }
    public function store(Request $request){
           // dd($request->all());
        $post=new Post();
        $post->title=$request->title;
        $post->description=$request->description;
        $post->save();
       return redirect('/post');
    }
   public function search(Request $request)
    {
    	if($request->has('search')){
    		$posts = Post::search($request->get('search'))->get();	
    	}else{
    		$posts = Post::get();
    	}
        return view('search', compact('posts'));
    }

    public function viewpdf($id){
      $post = Post::find($id);

      $pdf = PDF::loadView('pdf', compact('post'));
      return $pdf->download('sample.pdf');

    }
    public function view(){

    	$posts=Post::all();
    	return view('view',compact('posts'));
    }
}
