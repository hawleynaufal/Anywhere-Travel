<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
	public function index()
	{
		$posts = Post::all();
		dd($posts);
		return view('post',compact('posts'));
	}
    public function create()
    {
    	$categories = Category::all();
    	return view('post.create' , compact('categories'));
    }
    public function store()
    {
    	Post::create([
    		'slug' => str_slug(request('title')),
    		'title' => request('title'),
    		'content' => request ('content'),
    		'category_id' => request ('category_id')

    	]);
    	return redirect('/home');
    }
}
