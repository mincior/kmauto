<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availablecar extends Model
{
    use HasFactory,  AvailablecarRelationships;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //Begin craft placeholder #1
		'valoare', 
		'interval_id', 
		'car_id', 
		//End craft placeholder #1
        
    ];
    public $timestamps = false;

}
