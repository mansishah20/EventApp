<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table='place';  
	protected $fillable=['name'];

    public function package() 
	{
    return $this->hasMany('App\Package');
	}
}
