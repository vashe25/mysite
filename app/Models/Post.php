<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function detail($id){
		$post = $this->active()->find($id);
		return $post;
	}

    public function scopeActive($query){
    	$query->where(["active" => 1]);
    }
}
