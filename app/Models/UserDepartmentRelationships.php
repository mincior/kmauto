<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait UserDepartmentRelationships
{
	//Begin craft placeholder #1
	public function interval(){
		return $this->belongsTo('App\\Models\\Interval');
	}

	//End craft placeholder #1
}
