<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait MonthRelationships
{
	//Begin craft placeholder #1
	public function intervals(){
		return $this->hasMany('App\\Models\\Interval');
	}

	//End craft placeholder #1
}
