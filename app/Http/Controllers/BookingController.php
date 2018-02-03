<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rute;
use App\Transportation;

class BookingController extends Controller
{

    public function caripesawat()
    {
    	$depart_at=\Request::get('depart_at');
    	$rute_from=\Request::get('rute_from');
    	$rute_to=\Request::get('rute_to');

		$rute = Rute::where('depart_at','like','%'.$depart_at.'%')
					->where('rute_from','like','%'.$rute_from.'%')
					->where('rute_to','like','%'.$rute_to.'%')
					->paginate(4);

		return view('booking.caripesawat',compact('rute'));
    }

    
}
