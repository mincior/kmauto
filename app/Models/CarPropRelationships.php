<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait CarPropRelationships
{
	//Begin craft placeholder #1
	public function car_prop_interval(){
		return $this->belongsTo('App\\Models\\Interval', 'interval_id');
	}
	public function car_prop_car(){
		return $this->belongsTo('App\\Models\\Car', 'car_id');
	}
	public function car_prop_value(){
		return $this->belongsTo('App\\Models\\CarPropValue');
	}

	//End craft placeholder #1
}
