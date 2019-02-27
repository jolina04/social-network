<?php
/**
 * Created by PhpStorm.
 * User: Jed
 * Date: 2/26/2019
 * Time: 5:51 PM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function getDashboard()
    {
        $posts = Post::all();
        return view('dashboard', ['posts' => $posts]);
    }
    public function postCreatePost(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:350'
        ]);
        //Validation
        $post = new Post();
        $post->body = $request['body'];
        $message = 'There was an error';
        if($request->user()->posts()->save($post)){
            $message = "Post successfully created!";
        }
        return redirect()->route('dashboard')->with(['message' => $message]);
    }

    public function getDeletePost($post_id)
    {
        $post = Post::where('id', $post_id)->first();
        //$post = PoST::find($post_id)->first(); alternative way
        $post->delete();
        return redirect()->route('dashboard')->with(['message' => 'Successfully Deleted Post!']);
    }
 }
