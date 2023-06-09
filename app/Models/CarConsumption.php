<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarConsumption extends Model
{
    use HasFactory,  CarConsumptionRelationships;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //Begin craft placeholder #1
		'valoare', 
		'car_id', 
		'interval_id', 
		//End craft placeholder #1
        
    ];
    public $timestamps = false;
}
