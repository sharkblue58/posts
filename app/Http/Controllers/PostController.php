<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class PostController extends Controller
{
   
    public function createPost(){
        return view('welcome');
    }

    public function editPost($id){
        $post=db::table('posts')->where('id',$id)->first();
        return view('edit',compact('post'));
    }

    public function updatePost(Request $request,$id){
    
        db::table('posts')->where('id',$id)->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);
        return redirect()->route('post.show');
      
    }

    public function showPost(){
        $posts=db::table('posts')->get();
        return view('posts',compact('posts'));
    }

    public function insertPostData(Request $request){
         DB::table('posts')->insert([
            'title'=>$request->title,
            'body'=>$request->body,

         ]);
         return redirect()->route('post.show');
    }

    public function deletePost($id){
        db::table('posts')->where('id',$id)->delete();
        return redirect()->route('post.show');
    }

    public function deleteAllPosts(){
        DB::table('posts')->delete();
        return redirect()->route('post.show');
    }
    public function deleteAllPostsPerminantly(){
        DB::table('posts')->truncate();
        return redirect()->route('post.show');
    }
}
