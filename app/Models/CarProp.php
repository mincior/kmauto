<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarProp extends Model
{
    use HasFactory,  CarPropRelationships;
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
		'car_prop_value_id', 
		//End craft placeholder #1
        
    ];
    public $timestamps = false;

}
