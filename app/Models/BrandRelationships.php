<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait BrandRelationships
{
	//Begin craft placeholder #1
	public function types(){
		return $this->hasMany('App\\Models\\Type');
	}
	public function car(){
		return $this->hasOne('App\\Models\\Car');
	}

	//End craft placeholder #1
}
