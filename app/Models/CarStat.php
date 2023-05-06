<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarStat extends Model
{
    use HasFactory,  CarStatRelationships;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //Begin craft placeholder #1
		'observatii', 
		'interval_id', 
		'car_id', 
		'car_stat_value_id', 
		//End craft placeholder #1
        
    ];
    public $timestamps = false;

}
