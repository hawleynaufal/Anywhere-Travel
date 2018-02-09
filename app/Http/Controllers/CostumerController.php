<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Costumer;
use App\Transportation;
use App\Rute;
use App\Reservation;
use Auth;

 
class CostumerController extends Controller
{
	public function index()
	{
		$search=\Request::get('search');

		$costumer = Costumer::where('name','like','%'.$search.'%')->paginate(5);

		return view('admin.costumer',compact('costumer'));
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
	public function rutetampil()
	{
		$search=\Request::get('search');

		$rute = Rute::paginate(5);
		return view('admin.rutes',compact('rute'));
	}
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


    	return redirect()->route('admin.rutetampil');
    }
    public function ruteedit(Rute $rute)
	{

		
		return view('booking.edit',compact('rute'));


	}
	public function ruteupdate(Rute $rute)
	{
		

		$rute->update([
			'depart_at' => request('depart_at'),
    		'rute_from' => request('rute_from'),
    		'rute_to' => request('rute_to'),
    		'price' => request('price'),
    		'transportation_id' => request('transportation_id'),
		]);

		return redirect()->route('admin.rutetampil');
	}

	public function rutedestroy(Rute $rute)
	{
		$rute->delete();

		return redirect()->route('admin.rutetampil');
	}

	//RESERVATION
	public function reservationtampil()
	{

		$reservation = Reservation::paginate(5);
		return view('admin.reservation',compact('reservation'));
	}
}
