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
		return view("posts/detail", ["post" => $post]);
	}

    public function add(){
        return view("posts/edit");
    }

	public function edit(Post $postModel, $id){
		$post = $postModel->edit($id);
		return view("posts/edit", ["post" => $post]);
	}
	
	public function update(Request $request, Post $postModel, $id = 0){
		if ($id == 0){
            $postModel->name = $request->name;
            $postModel->description = $request->description;
            $postModel->content = $request->content;
            $postModel->published_at = $request->published_at;
            $postModel->active = $request->active;
            $postModel->save();
            return redirect()->action("PostController@index");
        } else {
            $post = $postModel->edit($id);
            $post->name = $request->name;
            $post->description = $request->description;
            $post->content = $request->content;
            $post->published_at = $request->published_at;
            $post->active = $request->active;
            $post->save();
            return redirect()->action("PostController@edit", ["id" => $id]);
        }
	}
}
