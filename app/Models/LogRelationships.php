<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait LogRelationships
{
	//Begin craft placeholder #1
	public function user(){
		return $this->belongsTo('App\\Models\\User');
	}

	//End craft placeholder #1
}