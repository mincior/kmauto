<?php

namespace App\Models;

trait KmlogRelationships
{
	//Begin Creative craft placeholder #1
	public function interval(){
		return $this->belongsTo('App\\Models\\Interval');
	}
	//End Creative craft placeholder #1
}
