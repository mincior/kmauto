<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait StatRelationships
{
	//Begin craft placeholder #1
	public function kmlog(){
		return $this->hasOne('App\\Models\\Kmlog');
	}

	//End craft placeholder #1
}
