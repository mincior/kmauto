<?php

namespace App\Models;

trait CarDepartmentRelationships
{
	//Begin craft placeholder #1
	public function interval(){
		return $this->belongsTo('App\\Models\\Interval');
	}

	//End craft placeholder #1
}
