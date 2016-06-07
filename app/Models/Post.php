<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //public function scopeId($query){
    	//$query->where(["id" => ])
    //}


    public function scopePublished($query){
    	$query->where(["active" => 1]);
    }
}
