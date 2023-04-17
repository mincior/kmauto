<?php

namespace App\Models;

trait KmlogRelationships
{
	//Begin Creative craft placeholder #1
	public function interval(){
		return $this->belongsTo('App\\Models\\Interval');
	}
	
	public function stat(){
		return $this->belongsTo('App\\Models\\Stat');
	}
	public function user(){
		return $this->belongsTo('App\\Models\\User');
	}
	public function car(){
		return $this->belongsTo('App\\Models\\Car');
	}
	//End Creative craft placeholder #1
}
