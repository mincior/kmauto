<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait FrameRelationships
{
	//Begin craft placeholder #1
	public function carsecond(){
		return $this->hasOne('App\\Models\\Carsecond');
	}

	//End craft placeholder #1
}
