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

	//Se folosesc in index - returneaza toti userii si masinile.  Nu in index se face asocierea intre useri si masini
	//ci in create sau edit. 
	public function user(){
		return $this->belongsTo('App\\Models\\User');
	}
	public function car(){
		return $this->belongsTo('App\\Models\\Car');
	}
	public function department(){
		return $this->belongsTo('App\\Models\\Department');
	}
	//End Creative craft placeholder #1
}
