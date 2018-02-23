<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    protected $fillable = [
    	'name' ,'address', 'phone','gender','kursi','rute_id','token',
    ];

    public function rute()
	{
		return $this->belongsTo(Rute::class);
	}
}
