<?php
/**
 * Created by PhpStorm.
 * User: Jed
 * Date: 2/26/2019
 * Time: 5:51 PM
 */

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function postCreatePost(Request $request)
    {
        //Validation
        $post = new Post();
        $post->body = $request['body'];
    }
}
