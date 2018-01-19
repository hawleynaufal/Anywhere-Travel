<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['title' ,'content', 'user_id','category_id','slug'];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
