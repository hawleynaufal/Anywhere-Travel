<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    protected $fillable = ['name' ,'address', 'phone','gender','user_id'];

    
}
