<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;

class PostController extends Controller
{
	public function index(){
		$posts = Post::all();
		//dd($posts);
		return view("posts/list", ["posts" => $posts]);
	}

	public function detail($id){
		echo $id;
		$obj = New Post();

		$post = $obj->published();
		if ($post != NULL) {
			//return view("post/detail", ["post" => $post]);
			//echo $post->id;
			//echo $post->active;
		} else {
			echo "Error: 404 Not Found";
		}

		dd($post);
	}
}
