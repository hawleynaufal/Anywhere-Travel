<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Category;
use Auth;

class PostController extends Controller
{
	public function welcome()
	{
		$loguser = Auth::user();
		return view('post.welcome',compact('loguser'));

	}
	public function index()
	{
		$loguser = Auth::user()->id;

		$posts = \App\Post::where('user_id','=',$loguser)->paginate(8);
		return view('post.index',compact('posts'));
	}

	public function show(Post $post)
	{
		$categories = Category::all();
		
		return view('post.show',compact('post','category'));
	}

	public function create()
	{
		$categories = Category::all();
		return view('post.create' , compact('categories'));
	}
	public function store()
	{
		$this->validate(request(),[
			'title' => 'required',
			'content' => 'required',
			'user_id' => 'sometimes'
		]);
		Post::create([
			'slug' => str_slug(request('title')),
			'title' => request('title'),
			'content' => request ('content'),
			'user_id' => Auth::id() , 
			'category_id' => request ('category_id')

		]);
		return redirect()->route('post.index')->withSuccess('Data telah ditambahkan');
	}
	public function edit(Post $post)
	{
		
		$categories = Category::all();
		return view('post.edit',compact('post','categories'));


	}
	public function update(Post $post)
	{
		

		$post->update([
			'title' => request('title'),
			'category_id' => request('category_id'),
			'content' => request('content'),
		]);

		return redirect()->route('post.index');
	}

	public function destroy(Post $post)
	{
		$post->delete();

		return redirect()->route('post.index');
	}
}
