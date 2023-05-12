<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait CarAsigRelationships
{
	//Begin craft placeholder #1
	public function carAsigValue(){
		return $this->belongsTo('App\\Models\\CarAsigValue');
	}

	//End craft placeholder #1
}
