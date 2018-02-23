<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['reservation_code' , 'reservation_date','seat_code','depart_at','price','costumer_id','user_id'];

    public function costumer()
	{
		return $this->belongsTo(Costumer::class);
	}
	


   
}
