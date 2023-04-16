<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait FuelRelationships
{
	//Begin craft placeholder #1
	public function intervals(){
		return $this->belongsToMany('App\\Models\\Interval', 'App\\Models\\CarFuel')->withPivot('observatii', 'valoare', 'interval_id', 'fuel_id');
	}
	public function car(){
		return $this->hasOne('App\\Models\\Car');
	}

	//End craft placeholder #1
}
