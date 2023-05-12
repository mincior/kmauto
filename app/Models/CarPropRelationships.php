<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait CarPropRelationships
{
	//Begin craft placeholder #1
	public function carPropValue(){
		return $this->belongsTo('App\\Models\\CarPropValue');
	}

	//End craft placeholder #1
}
