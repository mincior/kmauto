<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait IntervalRelationships
{
	//Begin craft placeholder #1
	public function month(){
		return $this->belongsTo('App\\Models\\Month');
	}
	public function kmlogs(){
		return $this->hasMany('App\\Models\\Kmlog');
	}

	//End craft placeholder #1
}
