<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Rute;
use App\Costumer;
use App\Transportation;

class BookingController extends Controller
{

    public function createcus($id)
    {
        $rute = Rute::findOrFail($id);

        return view('booking.isidata',compact('rute'));
    }
    public function storecus(Request $request,$id)
    { 


        for ($i=0; $i < $_GET['seat'] ; $i++) { 
            # code...
            $seat = $request->seathuruf[$i] . $request->seatangka[$i];
            Costumer::create([
                'name' => $request->name[$i],
                'address' =>$request->address[$i],
                'phone' => $request->phone[$i],
                'gander' => $request->gander[$i],
                'kursi' =>  $seat,
                
            ]);
        }

        return redirect()->route('booking.seat',$id);
    }
    public function seat($id){
        return view('booking.seat');
    }

    public function caripesawat(Request $request)
    {
    	$depart_at=$request->depart_at;
    	$rute_from=$request->rute_from;
    	$rute_to=$request->rute_to;
        $seat=$request->seat; 

        $rute = Rute::where('depart_at','like','%'.$depart_at.'%')
        ->where('rute_from','like','%'.$rute_from.'%')
        ->where('rute_to','like','%'.$rute_to.'%')
        ->whereHas('transportation',function($query) use($seat){
            $query->whereRaw('seat_qty'.-$seat.'> 0 ');
        })
        ->paginate(4);

        return view('booking.caripesawat',compact('rute'));
    }
    public function detailrute(Rute $rute){

        return view('booking.detailrute',compact('rute'));        
    }

    public function reservation(Rute $rute)
    {
        $reservation = Reservation::all();
        
        return view('booking.reservation',compact('rute','reservation'));
    }
    
}
