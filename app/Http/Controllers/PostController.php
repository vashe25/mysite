<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Validator;
use App\Http\Requests;
use App\Models\Post;

class PostController extends Controller
{
	public function show(Post $postModel){
		$posts = $postModel->listActive(5);
		return view("posts/index", ["posts" => $posts]);
	}

	public function index(Post $postModel){
		$posts = $postModel->getAll();
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
		$validator = Validator::make($request->all(), [
					"name" => "required",
				]);
		if ($validator->fails()){
			if ($id == 0) {
				return redirect()->action("PostController@add")
					->withErrors($validator);
			} else {
				return redirect()->action("PostController@edit", ["id" => $id])
					->withErrors($validator);
			}
		}
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
			if ($request->hasFile("img_src")){
				$file = $request->file("img_src");
				Storage::put(
					"public/posts/".$id."/".$file->getClientOriginalName(),
					file_get_contents($request->file("img_src")->getRealPath())
				);
				$post->img_src = Storage::url("public/posts/".$id."/".$file->getClientOriginalName());
			}
			$post->save();
			return redirect()->action("PostController@edit", ["id" => $id]);
		}
	}

	public function delete(Post $postModel, $id){
		$postModel->destroy($id);
		return redirect()->action("PostController@index");
	}
}
