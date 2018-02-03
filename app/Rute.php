<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
	protected $fillable = [
        'depart_at', 'rute_from', 'rute_to','price','transportation_id',
    ];
    
    public function transportation()
	{
		return $this->belongsTo(Transportation::class);
	}
}
