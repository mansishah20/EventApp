<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table='package';  
	protected $fillable=['name','price','photo','details','place_id','category_id'];

    public function booking() 
	{
    return $this->hasMany('App\Booking');
	}

    public function category() 
	{
		return $this->belongsTo('App\Category');
	}
	public function place() 
	{
		return $this->belongsTo('App\Place');
	}
	
}
