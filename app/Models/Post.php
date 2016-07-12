<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = "posts";
	// list active (published) posts with pagination
	public function listActive($rows = 10){
		$posts = $this->active()->paginate($rows);
		return $posts;
	}
	// list of all posts with pagination
	public function getAll($rows = 10){
		$posts = $this->all()->paginate($rows);
		return $posts;
	}
	// return active post by id
	public function detail($id){
		$post = $this->active()->find($id);
		return $post;
	}
	// return post by id
	public function edit($id){
		$post = $this->find($id);
		return $post;
	}
	// Active flag scope
    public function scopeActive($query){
    	$query->where(["active" => 1]);
    }
}
