<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait TypeRelationships
{
	//Begin craft placeholder #1
	public function brand(){
		return $this->belongsTo('App\\Models\\Brand');
	}
	public function car(){
		return $this->hasOne('App\\Models\\Car');
	}

	//End craft placeholder #1
}
