<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table='booking';  
	protected $fillable=['to_date','from_date','user_id','package_id','advance_pay'];

    public function user_master() 
	{
		return $this->belongsTo('App\UserMaster');
	}

    public function package() 
	{
		return $this->belongsTo('App\Package');
	}
}
