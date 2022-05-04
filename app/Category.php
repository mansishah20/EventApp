<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';  
	protected $fillable=['name','icon'];

    public function package() 
	{
    return $this->hasMany('App\Package');
	}
}
