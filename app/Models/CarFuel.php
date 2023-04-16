<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarFuel extends Model
{
    use HasFactory,  CarFuelRelationships;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //Begin craft placeholder #1
		'observatii', 
		'valoare', 
		'interval_id', 
		'fuel_id', 
		//End craft placeholder #1
        
    ];

}
