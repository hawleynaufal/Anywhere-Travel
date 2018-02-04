<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Costumer;
use App\Transportation;
use App\Rute;
use Auth;

 
class CostumerController extends Controller
{
	public function index()
	{
		$search=\Request::get('search');

		$costumer = Costumer::where('name','like','%'.$search.'%')->paginate(2);

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

    	return redirect()->route('welcome');
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

	//RUTES
    public function rutebikin()
    {
    	$transportation = Transportation::all();
    	return view('admin.create_rutes',compact('transportation'));
    }
    public function rutesetor()
    {
    	Rute::create([
    		'depart_at' => request('depart_at'),
    		'rute_from' => request('rute_from'),
    		'rute_to' => request('rute_to'),
    		'price' => request('price'),
    		'transportation_id' => request('transportation_id'),  
    	]);


    	return redirect()->route('costumer.index');
    }
}
