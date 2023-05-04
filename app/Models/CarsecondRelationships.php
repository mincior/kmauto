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

	//End craft placeholder #1
}
