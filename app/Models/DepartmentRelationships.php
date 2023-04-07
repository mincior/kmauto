<?php

namespace App\Models;
use App\Models\Month;
use App\Models\Interval;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait DepartmentRelationships
{
	//Begin craft placeholder #1
	public function users(){
		$selectedMonth = Month::where('select', 1)->first();
        $selectedInterval = Interval::where('month_id', $selectedMonth->id)->where('select', 1)->first();
		return $this->belongsToMany('App\\Models\\User', 'App\\Models\\UserDep')
		->withPivot('observatii','interval_id', 'department_id', 'user_id');
		//->wherePivot('interval_id', '<=' , $selectedInterval->id);
	}
	public function cars(){
		$selectedMonth = Month::where('select', 1)->first();
        $selectedInterval = Interval::where('month_id', $selectedMonth->id)->where('select', 1)->first();
		return $this->belongsToMany('App\\Models\\Car', 'App\\Models\\CarDep')
		->withPivot('observatii', 'interval_id', 'department_id', 'car_id')->wherePivot('interval_id', '<=' , $selectedInterval->id);
	}

	//End craft placeholder #1
}
