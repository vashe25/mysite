<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;

class PostController extends Controller
{
	public function index(Post $postModel){
		$posts = $postModel->listActive();
		return view("posts/list", ["posts" => $posts]);
	}

	public function detail(Post $postModel, $id){
		$post = $postModel->detail($id);
		$postsURL = action("PostController@index");
		return view("posts/detail", ["post" => $post, "link" => $postsURL]);
	}
}
