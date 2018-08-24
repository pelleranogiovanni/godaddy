<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'user_id','category_id','title','description','body','file','created_at'
	];
	
    public function tags(){
    	return $this->belongsToMany(Tag::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function category(){
    	return $this->belongsTo(Category::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

}
