<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait CarAsigRelationships
{
	//Begin craft placeholder #1
	public function car_asig_value(){
		return $this->belongsTo('App\\Models\\CarAsigValue');
	}
	public function car_asig_interval(){
		return $this->belongsTo('App\\Models\\Interval', 'interval_id');
	}
	public function car_asig_car(){
		return $this->belongsTo('App\\Models\\Car', 'car_id');
	}

	//End craft placeholder #1
}
