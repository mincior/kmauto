<?php

namespace App\Models;

trait CarDepRelationships
{
	//Begin craft placeholder #1
	public function interval(){
		return $this->belongsTo('App\\Models\\Interval');
	}
	public $timestamps = false;
	//End craft placeholder #1
}
