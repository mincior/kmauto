<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait CarsecondRelationships
{
	//Begin craft placeholder #1
	public function car(){
		return $this->belongsTo('App\\Models\\Car');
	}
	
	public function frame(){
		return $this->belongsTo('App\\Models\\Frame');
	}

	//End craft placeholder #1
}
