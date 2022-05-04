<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table='review';  
	protected $fillable=['message','user_id','date'];
	
	
    public function user_master() 
	{
    return $this->hasMany('App\UserMaster');
	}
	public function review() 
	{
    return $this->hasMany('App\Review');
	}
}
