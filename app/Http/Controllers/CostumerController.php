<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Costumer;
use Auth;

 
class CostumerController extends Controller
{
	public function index()
	{
		$costumer = \App\Costumer::paginate(5);
		return view('admin.index',compact('costumer'));
	}	
	public function welcome()
	{
		return view('booking.home');
	}
	
    public function create()
    {
    	return view('auth.costumer');
    }
    public function store()
    {
    	Costumer::create([
    		'name' => request('name'),
    		'address' => request('address'),
    		'phone' => request('phone'),
    		'gander' => request('gander'),
    		'user_id' => Auth::id()  
    	]);

    	return redirect()->route('costumer.index');
    }

   public function edit(Costumer $costumer)
	{

		
		return view('booking.edit',compact('costumer'));


	}
	public function update(Costumer $costumer)
	{
		

		$costumer->update([
			'name' => request('name'),
			'address' => request('address'),
			'phone' => request('phone'),
			'gender' => request('gender'),
		]);

		return redirect()->route('costumer.index');
	}

	public function destroy(Costumer $costumer)
	{
		$costumer->delete();

		return redirect()->route('costumer.index');
	}
}
