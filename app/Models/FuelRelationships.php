<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait FuelRelationships
{
	//Begin craft placeholder #1
	public function car(){
		return $this->belongsTo('App\\Models\\Car');
	}
	public function interval(){
		return $this->belongsTo('App\\Models\\Interval');
	}


	//End craft placeholder #1
}
