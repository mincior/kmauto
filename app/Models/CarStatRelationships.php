<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait CarStatRelationships
{
	//Begin craft placeholder #1
	public function car_stat_interval(){
		return $this->belongsTo('App\\Models\\Interval', 'interval_id');
	}
	public function car_stat_car(){ 
		return $this->belongsTo('App\\Models\\Car', 'car_id'); 
	}
	public function car_stat_value(){
		return $this->belongsTo('App\\Models\\CarStatValue');
	}

	//End craft placeholder #1
}
