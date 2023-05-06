<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait CarStatValueRelationships
{
	//Begin craft placeholder #1
	public function carStats(){
		return $this->hasMany('App\\Models\\CarStat');
	}

	//End craft placeholder #1
}
