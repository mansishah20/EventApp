<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMaster extends Model
{
    protected $table='user_master';  
	protected $fillable=['name','email','password','address','city','conact','gender','type'];
	
	
    public function booking() 
	{
    return $this->hasMany('App\Booking');
	}
	public function review() 
	{
    return $this->hasMany('App\Review');
	}
}
