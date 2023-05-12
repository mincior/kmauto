<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait CarAsigValueRelationships
{
	//Begin craft placeholder #1
	public function carAsigs(){
		return $this->hasMany('App\\Models\\CarAsig');
	}

	//End craft placeholder #1
}
