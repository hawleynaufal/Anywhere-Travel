<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Costumer;

 
class CostumerController extends Controller
{
	public function index()
	{
		$costumer = Costumer::all();
		return view('admin.index',compact('costumer'));
	}	
    public function create()
    {
    	return view('booking.isidata');
    }
    public function store()
    {
    	Costumer::create([
    		'name' => request('name'),
    		'address' => request('address'),
    		'phone' => request('phone'),
    		'gander' => request('gander')
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
