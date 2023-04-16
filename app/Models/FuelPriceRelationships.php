<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait FuelPriceRelationships
{
	//Begin craft placeholder #1
	public function fuel(){
		return $this->belongsTo('App\\Models\\Fuel');
	}

	public function interval(){
		return $this->belongsTo('App\\Models\\Interval');
	}

	//End craft placeholder #1
}
