<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait CarAsigValueRelationships
{
	//Begin craft placeholder #1
	public function car_asigs(){
		return $this->hasMany('App\\Models\\CarAsig');
	}

	//End craft placeholder #1
}
