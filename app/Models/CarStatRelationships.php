<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait CarStatRelationships
{
	//Begin craft placeholder #1
	public function carStatValue(){
		return $this->belongsTo('App\\Models\\CarStatValue');
	}

	//End craft placeholder #1
}
