<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interval extends Model
{
    use HasFactory,  IntervalRelationships;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //Begin craft placeholder #1
		'data_inceput', 
		'data_sfarsit', 
		'interval', 
		'select', 
		'inchis', 
		'month_id', 
		//End craft placeholder #1
        
    ];

}
