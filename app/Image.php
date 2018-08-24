<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
		'ruta','post_id','created_at','titulo','tipo'
	];

	public function post(){
    	return $this->belongsTo(Post::class);
    }
}
