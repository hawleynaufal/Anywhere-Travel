<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Rute;
use App\Auth;
use App\Costumer;
use App\Transportation;

class BookingController extends Controller
{
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

    public function createcus($id)
    {
        $rute = Rute::findOrFail($id);

        return view('booking.isidata',compact('rute'));
    }
    public function storecus(Request $request,$id)
    { 
        for ($i=0; $i < $_GET['seat'] ; $i++) { 

            $seat = $request->seathuruf[$i] . $request->seatangka[$i];
            
            Costumer::create([
                'name' => $request->name[$i],
                'address' =>$request->address[$i],
                'phone' => $request->phone[$i],
                'gander' => $request->gander[$i],
                'rute_id' => $id,
                'token' => $request->token,
                
            ]);
        }
        $token = $request->token ; 
        $customer = Costumer::where('rute_id',$id)->where('token',$token)->first();
        // return redirect()->route('booking.reservation',$id);
        return redirect('booking/'.$id.'/seat?name='.$customer->name.'&token='.$token);
        
    }
    public function seat($id)
    {
        $kursi = Costumer::join('rutes', 'costumers.rute_id', '=', 'rutes.id')
            ->where('rute_id',$id)
            ->select('costumers.kursi')
            ->get();
        $kursi_pesan = array();

       foreach($kursi as $seat){ 
            $kursi_pesan[] = $seat->kursi;
        };


        $costumer =  Costumer::where('token',$_GET['token'])->get();
       
        return view('booking.seat',compact('costumer','kursi_pesan'));
    }
    public function seatstore($id, Request $request)
    {   $token = $request->token ;
        $customer = Costumer::where('rute_id',$id)->where('token',$token)->get();
        $custom = Costumer::where('rute_id',$id)->where('token',$token)->first();

        $cuy = array();
        
     
           
        $j = 0;
       for ($i=1; $i <= count($customer) ; $i++) { 
           # code...
            $customer[$j]->update([
                'kursi' => $request->input('i_'.$i),
            ]);
            
            $j++;
       }
       return redirect('booking/'.$id.'/reservation?name='.$custom->name.'&token='.$token);

    }
    

    public function reservation(Request $request,$id)
    {
        $token = $request->token ; 
        $name = $request->name;
        $costumer = Costumer::where('token',$token)->get();
        $count = count($costumer);

        
        return view('booking.reservation',compact('costumer','id'));
    }
   
    public function storersrv(Request $request,$id)
    {       
        $token = $_GET['token'];
        $customer = Costumer::where('token',$token)->get();

        foreach($customer as $cus){
             Reservation::create([
                'reservation_code' => $request->reservation_code,
                'reservation_date' => $request->reservation_date,
                'seat_code' => $cus->kursi,
                'depart_at' => $request->depart_at,
                'price' => $request->price,
                'user_id' => $request->user_id,
                'costumer_id' => $cus->id,
            ]);
               
         }
       
            $reservasi = Reservation::where('reservation_code', $request->reservation_code)->first();


     return view('booking.payment',compact('reservasi'));
     }

       public function payment(Request $request,$id){
        $reservation = Reservation::where('reservation_code',$request->reservation_code)->get();

    return view('booking.payment',compact('reservation'));
    }

}
